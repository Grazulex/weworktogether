<?php

namespace App\Filament\Resources\OfficeResource\Pages;

use App\Filament\Resources\OfficeResource;
use Filament\Resources\Pages\CreateRecord;

class CreateOffice extends CreateRecord
{
    protected static string $resource = OfficeResource::class;

    protected ?string $maxContentWidth = 'full';

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
