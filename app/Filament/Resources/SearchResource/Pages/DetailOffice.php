<?php

namespace App\Filament\Resources\SearchResource\Pages;

use App\Filament\Resources\SearchResource;
use App\Models\Office;
use Filament\Resources\Pages\Page;

class DetailOffice extends Page
{
    protected static string $resource = SearchResource::class;

    protected static string $view = 'filament.resources.search-resource.pages.detail-office';

    public function __construct()
    {
        $this->record = Office::find(request()->route('office'));
    }
}
