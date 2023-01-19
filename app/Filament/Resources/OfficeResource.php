<?php

namespace App\Filament\Resources;

use App\Enums\StatusEnum;
use App\Filament\Resources\OfficeResource\Pages;
use App\Models\Office;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Wizard;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Heloufir\FilamentLeafLetGeoSearch\Forms\Components\LeafletInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Yepsua\Filament\Forms\Components\Rating;

class OfficeResource extends Resource
{
    protected static ?string $model = Office::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function getModelLabel(): string
    {
        return __('filament::resources/pages/office.title');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament::resources/pages/office.title_plural');
    }

    protected static function getNavigationGroup(): string
    {
        return __('filament::resources/pages/office.group');
    }

    protected static function getNavigationLabel(): string
    {
        return __('filament::resources/pages/office.title');
    }

    protected ?string $maxContentWidth = 'full';

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
                    Wizard\Step::make('Location')
                        ->label(__('filament::resources/pages/office.step.location.label'))
                        ->description(__('filament::resources/pages/office.step.location.description'))
                        ->schema([
                            Section::make(__('filament::resources/pages/office.section.home.label'))
                                ->description(__('filament::resources/pages/office.section.home.description'))
                                ->schema([
                                    Forms\Components\Select::make('user_id')
                                        ->options(
                                            User::all()->pluck('name', 'id')
                                        )
                                        ->required()
                                        ->visible(Auth::user()->is_admin),
                                    Forms\Components\TextInput::make('name')
                                        ->label(__('filament::resources/pages/office.form.name.label'))
                                        ->helperText(__('filament::resources/pages/office.form.name.helper'))
                                        ->required()
                                        ->maxLength(255),
                                    Forms\Components\Toggle::make('is_free')
                                        ->label(__('filament::resources/pages/office.form.is_free.label'))
                                        ->helperText(__('filament::resources/pages/office.form.is_free.helper'))
                                        ->required()
                                        ->default(true),
                                    Forms\Components\RichEditor::make(
                                        'description'
                                    )
                                        ->label(__('filament::resources/pages/office.form.description.label'))
                                        ->helperText(__('filament::resources/pages/office.form.description.helper'))
                                        ->disableToolbarButtons([
                                            'attachFiles',
                                            'codeBlock',
                                        ])
                                        ->required(),
                                    Forms\Components\CheckboxList::make('days')
                                        ->label(__('filament::resources/pages/office.form.days.label'))
                                        ->helperText(__('filament::resources/pages/office.form.days.helper'))
                                        ->options([
                                            'monday' => __('filament::resources/pages/office.form.days.options.monday'),
                                            'tuesday' => __('filament::resources/pages/office.form.days.options.tuesday'),
                                            'wednesday' => __('filament::resources/pages/office.form.days.options.wednesday'),
                                            'thursday' => __('filament::resources/pages/office.form.days.options.thursday'),
                                            'friday' => __('filament::resources/pages/office.form.days.options.friday'),
                                            'saturday' => __('filament::resources/pages/office.form.days.options.saturday'),
                                            'sunday' => __('filament::resources/pages/office.form.days.options.sunday'),
                                        ])
                                        ->required(),
                                    LeafletInput::make('location')
                                        ->label(__('filament::resources/pages/office.form.location.label'))
                                        ->helperText(__('filament::resources/pages/office.form.location.helper'))
                                        ->setMapHeight(300)
                                        ->setZoomControl(false)
                                        ->setScrollWheelZoom(false)
                                        ->setZoomLevel(10)
                                        ->required(),
                                ])
                                ->columns(2),
                        ]),
                    Wizard\Step::make(__('filament::resources/pages/office.step.workspace.label'))
                        ->description(__('filament::resources/pages/office.step.workspace.description'))
                        ->schema([
                            Section::make(__('filament::resources/pages/office.section.workspace.label'))
                                ->description(__('filament::resources/pages/office.section.workspace.description'))
                                ->schema([
                                    Forms\Components\TextInput::make('places')
                                        ->label(__('filament::resources/pages/office.form.places.label'))
                                        ->helperText(__('filament::resources/pages/office.form.places.helper'))
                                        ->numeric()
                                        ->minValue(1)
                                        ->maxValue(5)
                                        ->required()
                                        ->default(1),
                                    Forms\Components\Toggle::make(
                                        'have_internet'
                                    )
                                        ->label(__('filament::resources/pages/office.form.have_internet.label'))
                                        ->helperText(__('filament::resources/pages/office.form.have_internet.helper'))
                                        ->required()
                                        ->default(true),
                                    Forms\Components\Toggle::make('have_desk')
                                        ->label(__('filament::resources/pages/office.form.have_desk.label'))
                                        ->helperText(__('filament::resources/pages/office.form.have_desk.helper'))
                                        ->required()
                                        ->default(false),
                                    Forms\Components\Toggle::make(
                                        'have_printer'
                                    )
                                        ->label(__('filament::resources/pages/office.form.have_printer.label'))
                                        ->helperText(__('filament::resources/pages/office.form.have_printer.helper'))
                                        ->required()
                                        ->default(true),
                                    Forms\Components\Toggle::make(
                                        'have_scanner'
                                    )
                                        ->label(__('filament::resources/pages/office.form.have_scanner.label'))
                                        ->helperText(__('filament::resources/pages/office.form.have_scanner.helper'))
                                        ->required()
                                        ->default(false),
                                    Forms\Components\Toggle::make('have_fax')
                                        ->label(__('filament::resources/pages/office.form.have_fax.label'))
                                        ->helperText(__('filament::resources/pages/office.form.have_fax.helper'))
                                        ->required()
                                        ->default(false),
                                    Forms\Components\Toggle::make(
                                        'have_parking'
                                    )
                                        ->label(__('filament::resources/pages/office.form.have_parking.label'))
                                        ->helperText(__('filament::resources/pages/office.form.have_parking.helper'))
                                        ->required()
                                        ->default(true),
                                    Forms\Components\Toggle::make(
                                        'have_meeting_room'
                                    )
                                        ->label(__('filament::resources/pages/office.form.have_meeting_room.label'))
                                        ->helperText(__('filament::resources/pages/office.form.have_meeting_room.helper'))
                                        ->required()
                                        ->default(true),
                                    Rating::make('tranquility')
                                        ->label(__('filament::resources/pages/office.form.tranquility.label'))
                                        ->helperText(__('filament::resources/pages/office.form.tranquility.helper'))
                                        ->min(1)
                                        ->max(5)
                                        ->default(5),
                                    Rating::make('workspace')
                                        ->label(__('filament::resources/pages/office.form.workspace_size.label'))
                                        ->helperText(__('filament::resources/pages/office.form.workspace_size.helper'))
                                        ->min(1)
                                        ->max(5)
                                        ->default(5),
                                ])
                                ->columns(2),
                        ]),
                    Wizard\Step::make(__('filament::resources/pages/office.step.eatanddrink.label'))
                        ->description(__('filament::resources/pages/office.step.eatanddrink.description'))
                        ->schema([
                            Section::make(__('filament::resources/pages/office.section.eatanddrink.label'))
                                ->description(__('filament::resources/pages/office.section.eatanddrink.description'))
                                ->schema([
                                    Forms\Components\Toggle::make('give_coffee')
                                        ->label(__('filament::resources/pages/office.form.give_coffee.label'))
                                        ->helperText(__('filament::resources/pages/office.form.give_coffee.helper'))
                                        ->required()
                                        ->default(true),
                                    Forms\Components\Toggle::make('give_water')
                                        ->label(__('filament::resources/pages/office.form.give_water.label'))
                                        ->helperText(__('filament::resources/pages/office.form.give_water.helper'))
                                        ->required()
                                        ->default(true),
                                    Forms\Components\Toggle::make('have_fridge')
                                        ->label(__('filament::resources/pages/office.form.have_fridge.label'))
                                        ->helperText(__('filament::resources/pages/office.form.have_fridge.helper'))
                                        ->required()
                                        ->default(true),
                                    Forms\Components\Toggle::make(
                                        'have_microwave'
                                    )
                                        ->label(__('filament::resources/pages/office.form.have_microwave.label'))
                                        ->helperText(__('filament::resources/pages/office.form.have_microwave.helper'))
                                        ->required()
                                        ->default(true),
                                ])
                                ->columns(2),
                        ]),
                    Wizard\Step::make(__('filament::resources/pages/office.step.relationship.label'))
                        ->description(__('filament::resources/pages/office.step.relationship.description'))
                        ->schema([
                            Section::make(__('filament::resources/pages/office.section.relationship.label'))
                                ->description(__('filament::resources/pages/office.section.relationship.description'))
                                ->schema([
                                    Forms\Components\Toggle::make('have_garden')
                                        ->label(__('filament::resources/pages/office.form.have_garden.label'))
                                        ->helperText(__('filament::resources/pages/office.form.have_garden.helper'))
                                        ->required()
                                        ->default(false),
                                    Forms\Components\Toggle::make(
                                        'accept_smoking'
                                    )
                                        ->label(__('filament::resources/pages/office.form.accept_smoker.label'))
                                        ->helperText(__('filament::resources/pages/office.form.accept_smoker.helper'))
                                        ->required()
                                        ->default(false),
                                    Forms\Components\Repeater::make(
                                        'accept_languages'
                                    )
                                        ->label(__('filament::resources/pages/office.form.accept_languages.label'))
                                        ->helperText(__('filament::resources/pages/office.form.accept_languages.helper'))
                                        ->required()
                                        ->schema([
                                            Forms\Components\Select::make(
                                                'Language'
                                            )
                                                ->options([
                                                    __('filament::resources/pages/office.form.accept_languages.options.french'),
                                                    __('filament::resources/pages/office.form.accept_languages.options.dutch'),
                                                    __('filament::resources/pages/office.form.accept_languages.options.english'),
                                                    __('filament::resources/pages/office.form.accept_languages.options.german'),
                                                    __('filament::resources/pages/office.form.accept_languages.options.spanish'),
                                                    __('filament::resources/pages/office.form.accept_languages.options.italian'),
                                                    __('filament::resources/pages/office.form.accept_languages.options.other'),
                                                ])
                                                ->required(),
                                        ]),
                                ])
                                ->columns(2),
                        ]),
                    Wizard\Step::make('Control')
                        ->description('Admin controle')
                        ->schema([
                            Section::make('Validation')
                                ->description('Validation date')
                                ->schema([
                                    Forms\Components\DateTimePicker::make(
                                        'verified_at'
                                    )->required(),
                                    Forms\Components\Select::make('status')
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
                Tables\Columns\TextColumn::make('user.fullname')->visible(
                    Auth::user()->is_admin
                ),
                Tables\Columns\TextColumn::make('name')
                    ->label(__('filament::resources/pages/office.table.name.label')),
                Tables\Columns\TextColumn::make('places')
                    ->label(__('filament::resources/pages/office.table.places.label')),
                Tables\Columns\BadgeColumn::make('status')
                    ->label(__('filament::resources/pages/office.table.status.label'))
                    ->colors([
                        'primary' => StatusEnum::VALIDATION->value,
                        'success' => StatusEnum::OPEN->value,
                        'warning' => StatusEnum::CLOSE->value,
                        'danger' => StatusEnum::BLOCK->value,
                    ])
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('verified_at')
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
            'index' => Pages\ListOffices::route('/'),
            'create' => Pages\CreateOffice::route('/create'),
            'edit' => Pages\EditOffice::route('/{record}/edit'),
        ];
    }
}
