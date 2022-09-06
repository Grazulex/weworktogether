<?php

namespace App\Filament\Resources\SearchResource\Pages;

use App\Filament\Resources\SearchResource;
use App\Filament\Resources\SearchResource\Widgets\OfficeOverview;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSearch extends ViewRecord
{
   protected static string $resource = SearchResource::class;

   protected function getRedirectUrl(): string
   {
      return $this->getResource()::getUrl('index');
   }

   protected function getActions(): array
   {
      return [
         //
      ];
   }

   protected function getFooterWidgets(): array
   {
      return [
         OfficeOverview::class,
      ];
   }
}
