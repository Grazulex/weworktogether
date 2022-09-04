<?php

namespace App\Filament\Resources\SearchResource\Pages;

use App\Filament\Resources\SearchResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class ListSearches extends ListRecords
{
    protected static string $resource = SearchResource::class;


    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
