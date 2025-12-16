<?php

namespace App\Filament\Resources\Institusis;

use App\Filament\Resources\Institusis\Pages\CreateInstitusi;
use App\Filament\Resources\Institusis\Pages\EditInstitusi;
use App\Filament\Resources\Institusis\Pages\ListInstitusis;
use App\Filament\Resources\Institusis\Pages\ViewInstitusi;
use App\Filament\Resources\Institusis\Schemas\InstitusiForm;
use App\Filament\Resources\Institusis\Schemas\InstitusiInfolist;
use App\Filament\Resources\Institusis\Tables\InstitusisTable;
use App\Models\Institusi;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class InstitusiResource extends Resource
{
    protected static ?string $model = Institusi::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nm_institusi';

    public static function form(Schema $schema): Schema
    {
        return InstitusiForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return InstitusiInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return InstitusisTable::configure($table);
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
            'index' => ListInstitusis::route('/'),
            'create' => CreateInstitusi::route('/create'),
            'view' => ViewInstitusi::route('/{record}'),
            'edit' => EditInstitusi::route('/{record}/edit'),
        ];
    }
}
