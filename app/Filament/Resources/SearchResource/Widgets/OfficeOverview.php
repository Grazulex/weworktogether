<?php

namespace App\Filament\Resources\SearchResource\Widgets;

use App\Models\OfficeSearch;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class OfficeOverview extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    public ?Model $record = null;

    protected function getTableQuery(): Builder
    {
        return OfficeSearch::where('search_id', $this->record->id)->with('office')->orderBy('distance', 'asc');
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('office.name')
               ->label(__('filament::resources/widgets/office.table.name.label'))
               ->description(fn (OfficeSearch $record): string => $record->office->description)
               ->searchable()
               ->sortable(),
            Tables\Columns\TextColumn::make('distance')
               ->label(__('filament::resources/widgets/office.table.distance.label'))
               ->sortable()
               ->suffix('km')
               ->tooltip(__('filament::resources/widgets/office.table.distance.tooltip')),
            Tables\Columns\IconColumn::make('office.is_free')
               ->label(__('filament::resources/widgets/office.table.is_free.label'))
               ->boolean(true)
               ->tooltip(__('filament::resources/widgets/office.table.is_free.tooltip')),
            Tables\Columns\IconColumn::make('office.have_desk')
               ->label(__('filament::resources/widgets/office.table.have_desk.label'))
               ->boolean(true)
               ->tooltip(__('filament::resources/widgets/office.table.have_desk.tooltip')),
            Tables\Columns\TagsColumn::make('office.days')
               ->label(__('filament::resources/widgets/office.table.days.label'))
               ->tooltip(__('filament::resources/widgets/office.table.days.tooltip')),
            Tables\Columns\BadgeColumn::make('office.tranquility')
               ->label(__('filament::resources/widgets/office.table.tranquility.label'))
               ->suffix('/5')
               ->tooltip(__('filament::resources/widgets/office.table.tranquility.tooltip')),
            Tables\Columns\BadgeColumn::make('office.workspace')
               ->label(__('filament::resources/widgets/office.table.workspace.label'))
               ->suffix('/5')
               ->tooltip(__('filament::resources/widgets/office.table.workspace.tooltip')),

        ];
    }

    protected function getTableActions(): array
    {
        return [
            Action::make('detail')
               ->label(__('filament::resources/widgets/office.table.detail.label'))
               ->color('secondary')
               ->icon('heroicon-s-eye')
               ->url(fn (OfficeSearch $record): string => route('filament.resources.searches.detail', $record->office)),
            Action::make('contact')
               ->label(__('filament::resources/widgets/office.table.contact.label'))
               ->color('success')
               ->icon('heroicon-s-pencil')
               ->url(fn (OfficeSearch $record): string => route('filament.resources.offices.edit', $record->office)),
        ];
    }
}
