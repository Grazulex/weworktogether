<?php

namespace App\Filament\Resources\SearchResource\Widgets;

use App\Enums\OriginEnums;
use App\Models\OfficeSearch;
use App\Models\Plate;
use Closure;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Filament\Tables\Actions\Action;

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
            ->description(fn (OfficeSearch  $record): string => $record->office->description)
            ->searchable()
            ->sortable(),
         Tables\Columns\TextColumn::make('distance')
            ->sortable()
            ->suffix('km')
            ->tooltip('Distance from your home to this office'),
         Tables\Columns\BooleanColumn::make('office.is_free')
            ->label('Free')
            ->tooltip('The person who offers this sharing does it for free '),
         Tables\Columns\BooleanColumn::make('office.have_desk')
            ->label('Dedicated desk')
            ->tooltip('There is a dedicated desk/table for you'),
         Tables\Columns\TagsColumn::make('office.days')
            ->label('Days')
            ->tooltip('The days you can join us'),
         Tables\Columns\BadgeColumn::make('office.tranquility')
            ->label('Tranquility')
            ->suffix('/5')
            ->tooltip('Rating out of 5 about the tranquility of the workspace (presence of children, noisy animals, etc.)'),
         Tables\Columns\BadgeColumn::make('office.workspace')
            ->label('Workspace')
            ->suffix('/5')
            ->tooltip('Rate about proposed workspace size out of 5'),

      ];
   }

   protected function getTableActions(): array
   {
      return [
         Action::make('detail')
            ->color('secondary')
            ->icon('heroicon-s-eye')
            ->url(fn (OfficeSearch $record): string => route('filament.resources.offices.edit', $record->office))
            ->openUrlInNewTab(),
         Action::make('contact')
            ->color('success')
            ->icon('heroicon-s-pencil')
            ->url(fn (OfficeSearch $record): string => route('filament.resources.offices.edit', $record->office))
      ];
   }
}
