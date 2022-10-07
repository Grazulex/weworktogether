<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OfficeResource\Pages;
use App\Models\Office;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Heloufir\FilamentLeafLetGeoSearch\Forms\Components\LeafletInput;
use App\Enums\StatusEnum;
use App\Models\User;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Yepsua\Filament\Forms\Components\Rating;

class OfficeResource extends Resource
{
    protected static ?string $model = Office::class;

    protected static ?string $navigationIcon = "heroicon-o-collection";
    protected static ?string $navigationGroup = "Yours shares & requests";
    protected static ?string $navigationLabel = "Yours offices";

    protected ?string $maxContentWidth = "full";

    public static function getEloquentQuery(): Builder
    {
        if (auth()->user()->is_admin === true) {
            return parent::getEloquentQuery();
        }
        return parent::getEloquentQuery()->whereBelongsTo(auth()->user());
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Wizard::make([
                    Wizard\Step::make("Location")
                        ->description(
                            "Information about the location of the office"
                        )
                        ->schema([
                            Section::make("Your home")
                                ->description("Information about your home")
                                ->schema([
                                    Forms\Components\Select::make("user_id")
                                        ->options(
                                            User::all()->pluck("name", "id")
                                        )
                                        ->required()
                                        ->visible(Auth::user()->is_admin),
                                    Forms\Components\TextInput::make("name")
                                        ->helperText(
                                            'Give an easy name for everyone ("nice little office", "together one day a week",..)'
                                        )
                                        ->required()
                                        ->maxLength(255),
                                    Forms\Components\Toggle::make("is_free")
                                        ->label("Free")
                                        ->helperText(
                                            "Do you offer free sharing"
                                        )
                                        ->required()
                                        ->default(true),
                                    Forms\Components\RichEditor::make(
                                        "description"
                                    )
                                        ->helperText(
                                            "Tell other users about your coworking space"
                                        )
                                        ->disableToolbarButtons([
                                            "attachFiles",
                                            "codeBlock",
                                        ])
                                        ->required(),
                                    Forms\Components\CheckboxList::make("days")
                                        ->helperText(
                                            "What days can you invite someone to your home"
                                        )
                                        ->options([
                                            "monday" => "Monday",
                                            "tuestday" => "Thuesday",
                                            "wednesday" => "Wednesday",
                                            "thursday" => "Thursday",
                                            "friday" => "Friday",
                                            "saturday" => "Saturday",
                                            "sunday" => "Sunday",
                                        ])
                                        ->required(),
                                    LeafletInput::make("location")
                                        ->helperText(
                                            "Insert your address. This one will NOT be displayed"
                                        )
                                        ->setMapHeight(300)
                                        ->setZoomControl(false)
                                        ->setScrollWheelZoom(false)
                                        ->setZoomLevel(10)
                                        ->required(),
                                ])
                                ->columns(2),
                        ]),
                    Wizard\Step::make("Workspace")
                        ->description("What do you offer as a workspace?")
                        ->schema([
                            Section::make("Your home")
                                ->description("Information about your home")
                                ->schema([
                                    Forms\Components\TextInput::make("places")
                                        ->label("How many people can you share your office with?")
                                        ->helperText(
                                            "How many people are you inviting"
                                        )
                                        ->numeric()
                                        ->minValue(1)
                                        ->maxValue(5)
                                        ->required()
                                        ->default(1),
                                    Forms\Components\Toggle::make(
                                        "have_internet"
                                    )
                                        ->label("Internet")
                                        ->helperText(
                                            "Do you share a WIFI internet connexion"
                                        )
                                        ->required()
                                        ->default(true),
                                    Forms\Components\Toggle::make("have_desk")
                                        ->label("Desk")
                                        ->helperText(
                                            "Do you offer a real workdesk (as opposed to a table)"
                                        )
                                        ->required()
                                        ->default(false),
                                    Forms\Components\Toggle::make(
                                        "have_printer"
                                    )
                                        ->label("Printer")
                                        ->helperText(
                                            "Do you share your printer"
                                        )
                                        ->required()
                                        ->default(true),
                                    Forms\Components\Toggle::make(
                                        "have_scanner"
                                    )
                                        ->label("Scanner")
                                        ->helperText(
                                            "Do you share your scanner"
                                        )
                                        ->required()
                                        ->default(false),
                                    Forms\Components\Toggle::make("have_fax")
                                        ->label("Fax")
                                        ->helperText("Do you share your fax")
                                        ->required()
                                        ->default(false),
                                    Forms\Components\Toggle::make(
                                        "have_parking"
                                    )
                                        ->label("Parking")
                                        ->helperText(
                                            "Do you have a parking space for your co-workers?"
                                        )
                                        ->required()
                                        ->default(true),
                                    Forms\Components\Toggle::make(
                                        "have_meeting_room"
                                    )
                                        ->label("Meeting Room")
                                        ->helperText(
                                            "Do you have a quiet space where your co-workers can isolate themselves for phone calls or meeting?"
                                        )
                                        ->required()
                                        ->default(true),
                                    Rating::make("tranquility")
                                        ->label("Tranquility")
                                        ->helperText(
                                            "If you should give a rating out of 5 for the tranquility of the workspace (presence of children, noisy animals, etc.)"
                                        )
                                        ->min(1)
                                        ->max(5)
                                        ->default(5),
                                    Rating::make("workspace")
                                        ->label("Workspace size")
                                        ->helperText(
                                            "If you should rate your proposed workspace size out of 5"
                                        )
                                        ->min(1)
                                        ->max(5)
                                        ->default(5),
                                ])
                                ->columns(2),
                        ]),
                    Wizard\Step::make("Eat & drink")
                        ->description(
                            "Do you offer facilities for eating and drinking?"
                        )
                        ->schema([
                            Section::make("Your gift")
                                ->description(
                                    "Information about your facilities"
                                )
                                ->schema([
                                    Forms\Components\Toggle::make("give_coffee")
                                        ->label("Coffee")
                                        ->helperText(
                                            "Do you offer to share coffee for free?"
                                        )
                                        ->required()
                                        ->default(true),
                                    Forms\Components\Toggle::make("give_water")
                                        ->label("Water")
                                        ->helperText(
                                            "Do you offer to share water for free?"
                                        )
                                        ->required()
                                        ->default(true),
                                    Forms\Components\Toggle::make("have_fridge")
                                        ->label("Fridge")
                                        ->helperText(
                                            "Do you have a fridge where your co-workers can store their food and/or drinks?"
                                        )
                                        ->required()
                                        ->default(true),
                                    Forms\Components\Toggle::make(
                                        "have_microwave"
                                    )
                                        ->label("Microwave")
                                        ->helperText(
                                            "Do you offer to share a microwave for free?"
                                        )
                                        ->required()
                                        ->default(true),
                                ])
                                ->columns(2),
                        ]),
                    Wizard\Step::make("Relationship")
                        ->description(
                            "For a good cohabitation, do you accept any type of person?"
                        )
                        ->schema([
                            Section::make("good relationship")
                                ->description("some important points")
                                ->schema([
                                    Forms\Components\Toggle::make("have_garden")
                                        ->label("Garden")
                                        ->helperText(
                                            "Do you offer to share a private garden?"
                                        )
                                        ->required()
                                        ->default(false),
                                    Forms\Components\Toggle::make(
                                        "accept_smoking"
                                    )
                                        ->label("Smoking")
                                        ->helperText(
                                            "Do you accept to share your workspace with smokers?"
                                        )
                                        ->required()
                                        ->default(false),
                                    Forms\Components\Repeater::make(
                                        "accept_languages"
                                    )
                                        ->label("Languages")
                                        ->helperText(
                                            "What languages do you speak?"
                                        )
                                        ->required()
                                        ->schema([
                                            Forms\Components\Select::make(
                                                "Language"
                                            )
                                                ->options([
                                                    "FR",
                                                    "NL",
                                                    "EN",
                                                    "DE",
                                                    "ES",
                                                    "IT",
                                                    "Other",
                                                ])
                                                ->required(),
                                        ]),
                                ])
                                ->columns(2),
                        ]),
                    Wizard\Step::make("Control")
                        ->description("Admin controle")
                        ->schema([
                            Section::make("Validation")
                                ->description("Validation date")
                                ->schema([
                                    Forms\Components\DateTimePicker::make(
                                        "verified_at"
                                    )->required(),
                                    Forms\Components\Select::make("status")
                                        ->options(StatusEnum::class)
                                        ->required()
                                        ->visible(Auth::user()->is_admin),
                                ])
                                ->columns(2),
                        ])
                        ->visible(Auth::user()->is_admin),
                ]),
            ])
            ->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("user.fullname")->visible(
                    Auth::user()->is_admin
                ),
                Tables\Columns\TextColumn::make("name"),
                Tables\Columns\TextColumn::make("places"),
                Tables\Columns\BadgeColumn::make("status")
                    ->colors([
                        "primary" => StatusEnum::VALIDATION->value,
                        "success" => StatusEnum::OPEN->value,
                        "warning" => StatusEnum::CLOSE->value,
                        "danger" => StatusEnum::BLOCK->value,
                    ])
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make("verified_at")
                    ->dateTime()
                    ->visible(Auth::user()->is_admin),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([Tables\Actions\DeleteBulkAction::make()]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            "index" => Pages\ListOffices::route("/"),
            "create" => Pages\CreateOffice::route("/create"),
            "edit" => Pages\EditOffice::route("/{record}/edit"),
        ];
    }
}
