<?php

namespace App\Filament\Resources\News;

use App\Models\News;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class NewsResource extends Resource
{
    // MODEL
    protected static string|null $model = News::class;

    // ICON (dari kamu)
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-newspaper';

    // LABEL
    protected static ?string $navigationLabel = 'Berita';
    protected static ?string $modelLabel = 'Berita';
    protected static ?string $pluralModelLabel = 'Berita';

    // GROUP & SORT (FIX TYPE + lengkapin yang tadi kepotong)
    protected static string|UnitEnum|null $navigationGroup = 'Publikasi';
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
            'index'  => \App\Filament\Resources\News\Pages\ListNews::route('/'),
            'create' => \App\Filament\Resources\News\Pages\CreateNews::route('/create'),
            'edit'   => \App\Filament\Resources\News\Pages\EditNews::route('/{record}/edit'),
            'view'   => \App\Filament\Resources\News\Pages\ViewNews::route('/{record}'),
        ];
    }
}