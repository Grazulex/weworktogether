<?php

namespace App\Filament\Resources;

use App\Enums\StatusEnum;
use App\Filament\Resources\SearchResource\Pages;
use App\Filament\Resources\SearchResource\RelationManagers;
use App\Models\Office;
use App\Models\Search;
use App\Models\User;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Heloufir\FilamentLeafLetGeoSearch\Forms\Components\LeafletInput;
use Illuminate\Support\Facades\Auth;

class SearchResource extends Resource
{
    protected static ?string $model = Search::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Yours shares & requests';
    protected static ?string $navigationLabel = 'Yours requests';


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
                Forms\Components\Select::make('user_id')
                    ->options(User::all()->pluck('name', 'id'))
                    ->required()
                    ->visible(Auth::user()->is_admin)
                    ->hiddenOn('view'),
                Forms\Components\DateTimePicker::make('verified_at')
                    ->required()
                    ->visible(Auth::user()->is_admin)
                    ->hiddenOn('view'),
                Forms\Components\Select::make('status')
                    ->options(StatusEnum::class)
                    ->required()
                    ->visible(Auth::user()->is_admin)
                    ->hiddenOn('view'),
                Forms\Components\TextInput::make('name')
                    ->helperText('Give an easy name for everyone ("looking for nice college", "why not be together",..)')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('distance')
                    ->helperText('What is the maximum distance (kilometer) from your home')
                    ->required()
                    ->numeric()
                    ->default(20),
                Forms\Components\RichEditor::make('description')
                    ->helperText('Explain in a few lines why this sharing')
                    ->disableToolbarButtons([
                        'attachFiles',
                        'codeBlock',
                    ])
                    ->required(),
                LeafletInput::make('location')
                    ->helperText('Insert your address. This one will NOT be displayed')
                    ->setMapHeight(300)
                    ->setZoomControl(false)
                    ->setScrollWheelZoom(false)
                    ->setZoomLevel(10)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.fullname')->visible(Auth::user()->is_admin),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\BadgeColumn::make('status')
                    ->colors([
                        'primary' => StatusEnum::VALIDATION->value,
                        'success' => StatusEnum::OPEN->value,
                        'warning' => StatusEnum::CLOSE->value,
                        'danger' => StatusEnum::BLOCK->value,
                    ])->searchable()->sortable(),
                Tables\Columns\TextColumn::make('verified_at')
                    ->dateTime()
                    ->visible(Auth::user()->is_admin),
                Tables\Columns\BadgeColumn::make('offices_count')
                    ->label('Office(s) finded')
                    ->counts('offices')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make()->label('View offices'),

            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
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
            'index' => Pages\ListSearches::route('/'),
            'create' => Pages\CreateSearch::route('/create'),
            'edit' => Pages\EditSearch::route('/{record}/edit'),
            'view' => Pages\ViewSearch::route('/{record}')
        ];
    }
}
