<?php

namespace App\Filament\Resources;

use App\Enums\StatusEnum;
use App\Filament\Resources\SearchResource\Pages;
use App\Models\Search;
use App\Models\User;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Heloufir\FilamentLeafLetGeoSearch\Forms\Components\LeafletInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class SearchResource extends Resource
{
    protected static ?string $model = Search::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';


    public static function getModelLabel(): string
    {
        return __('filament::resources/pages/search.title');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament::resources/pages/search.title_plural');
    }

    protected static function getNavigationGroup(): string
    {
        return __('filament::resources/pages/search.group');
    }

    protected static function getNavigationLabel(): string
    {
        return __('filament::resources/pages/search.title');
    }

    public static function getEloquentQuery(): Builder
    {
        if (auth()->user()->is_admin === true) {
            return parent::getEloquentQuery();
        }

        return parent::getEloquentQuery()->whereBelongsTo(auth()->user());
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
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
                ->label(__('filament::resources/pages/search.form.name.label'))
                ->helperText(
                    __('filament::resources/pages/search.form.name.helper')
                )
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('distance')
                ->label(__('filament::resources/pages/search.form.distance.label'))
                ->helperText(
                    __('filament::resources/pages/search.form.distance.helper')
                )
                ->required()
                ->numeric()
                ->default(20),
            Forms\Components\RichEditor::make('description')
                ->label(__('filament::resources/pages/search.form.description.label'))
                ->helperText(
                    __('filament::resources/pages/search.form.description.helper'))
                ->disableToolbarButtons(['attachFiles', 'codeBlock'])
                ->required(),
            LeafletInput::make('location')
                ->label(__('filament::resources/pages/search.form.location.label'))
                ->helperText(
                    __('filament::resources/pages/search.form.location.helper')
                )
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
                Tables\Columns\TextColumn::make('user.fullname')->visible(
                    Auth::user()->is_admin
                ),
                Tables\Columns\TextColumn::make('name')
                    ->label(__('filament::resources/pages/search.table.name.label')),
                Tables\Columns\BadgeColumn::make('status')
                    ->label(__('filament::resources/pages/search.table.status.label'))
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
                Tables\Columns\BadgeColumn::make('offices_count')
                    ->label(__('filament::resources/pages/search.table.offices.label'))
                    ->counts('offices'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make()->label(__('filament::resources/pages/search.table.actions.view.label')),
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
            'index' => Pages\ListSearches::route('/'),
            'create' => Pages\CreateSearch::route('/create'),
            'edit' => Pages\EditSearch::route('/{record}/edit'),
            'view' => Pages\ViewSearch::route('/{record}'),
            'detail' => Pages\DetailOffice::route('/{office}/detail'),
        ];
    }
}
