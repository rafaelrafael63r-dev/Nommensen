<?php

namespace App\Filament\Resources\Students;

use App\Models\Student;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class StudentResource extends Resource
{
    // MODEL
    protected static string|null $model = Student::class;

    // ICON (dari kamu)
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-users';

    // LABEL
    protected static ?string $navigationLabel = 'Mahasiswa';
    protected static ?string $modelLabel = 'Mahasiswa';
    protected static ?string $pluralModelLabel = 'Mahasiswa';

    // GROUP & SORT (FIX TYPE)
    protected static string|UnitEnum|null $navigationGroup = 'Manajemen SDM';
    protected static ?int $navigationSort = 4;

    // TITLE
    protected static ?string $recordTitleAttribute = 'nama';

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
            'index'  => \App\Filament\Resources\Students\Pages\ListStudents::route('/'),
            'create' => \App\Filament\Resources\Students\Pages\CreateStudent::route('/create'),
            'edit'   => \App\Filament\Resources\Students\Pages\EditStudent::route('/{record}/edit'),
            'view'   => \App\Filament\Resources\Students\Pages\ViewStudent::route('/{record}'),
        ];
    }
}