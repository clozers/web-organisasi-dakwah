<?php

namespace App\Filament\Resources\Institusis\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class InstitusiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nm_institusi')
                    ->required(),
                TextInput::make('keterangan'),
            ]);
    }
}
