<?php

namespace App\Filament\Resources\Histories;

use App\Models\History;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HistoryResource extends Resource
{
    // MODEL
    protected static string|null $model = History::class;

    // ICON
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-clock';

    // LABEL (sesuai punyamu)
    protected static ?string $navigationLabel = 'Sejarah';
    protected static ?string $modelLabel = 'Sejarah';
    protected static ?string $pluralModelLabel = 'Sejarah';

    // GROUP & SORT (FIX TYPE WAJIB)
    protected static string|UnitEnum|null $navigationGroup = 'Profil Universitas';
    protected static ?int $navigationSort = 2;

    // TITLE
    protected static ?string $recordTitleAttribute = 'judul';

    // FORM (sementara kosong)
    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            //
        ]);
    }

    // TABLE (sementara kosong)
    public static function table(Table $table): Table
    {
        return $table;
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema;
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index'  => \App\Filament\Resources\Histories\Pages\ListHistories::route('/'),
            'create' => \App\Filament\Resources\Histories\Pages\CreateHistory::route('/create'),
            'edit'   => \App\Filament\Resources\Histories\Pages\EditHistory::route('/{record}/edit'),
            'view'   => \App\Filament\Resources\Histories\Pages\ViewHistory::route('/{record}'),
        ];
    }
}