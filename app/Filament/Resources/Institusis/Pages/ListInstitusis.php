<?php

namespace App\Filament\Resources\Institusis\Pages;

use App\Filament\Resources\Institusis\InstitusiResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListInstitusis extends ListRecords
{
    protected static string $resource = InstitusiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
