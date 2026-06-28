<?php

namespace App\Filament\Resources\VisiMisi;

use App\Models\Visimisi;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Forms\Components\Textarea;

class VisimisiResource extends Resource
{
    // MODEL
    protected static string|null $model = Visimisi::class;

    // ICON
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-eye';

    // LABEL
    protected static ?string $navigationLabel = 'Visi & Misi';
    protected static ?string $modelLabel = 'Visi & Misi';
    protected static ?string $pluralModelLabel = 'Visi & Misi';

    // GROUP & SORT (FIX TYPE)
    protected static string|UnitEnum|null $navigationGroup = 'Profil Universitas';
    protected static ?int $navigationSort = 3;

    // TITLE
    protected static ?string $recordTitleAttribute = 'judul';

    // FORM (INI YANG BENAR UNTUK VISI MISI)
    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Textarea::make('visi')
                ->label('Visi')
                ->required()
                ->rows(4),

            Textarea::make('misi')
                ->label('Misi')
                ->required()
                ->rows(6),
        ]);
    }

    // TABLE
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
            'index'  => \App\Filament\Resources\Visimisi\Pages\ListVisiMisis::route('/'),
            'create' => \App\Filament\Resources\Visimisi\Pages\CreateVisiMisi::route('/create'),
            'edit'   => \App\Filament\Resources\Visimisi\Pages\EditVisiMisi::route('/{record}/edit'),
        ];
    }
}