<?php

namespace App\Filament\Resources\Institusis\Pages;

use App\Filament\Resources\Institusis\InstitusiResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewInstitusi extends ViewRecord
{
    protected static string $resource = InstitusiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
