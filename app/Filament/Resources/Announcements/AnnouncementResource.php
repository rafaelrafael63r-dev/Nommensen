<?php

namespace App\Filament\Resources\Announcements;

use App\Models\Announcement;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AnnouncementResource extends Resource
{
    // MODEL
    protected static string|null $model = Announcement::class;

    // ICON (dari kamu)
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-megaphone';

    // LABEL
    protected static ?string $navigationLabel = 'Pengumuman';
    protected static ?string $modelLabel = 'Pengumuman';
    protected static ?string $pluralModelLabel = 'Pengumuman';

    // GROUP & SORT (FIX TYPE)
    protected static string|UnitEnum|null $navigationGroup = 'Publikasi';
    protected static ?int $navigationSort = 1;

    // TITLE
    protected static ?string $recordTitleAttribute = 'judul';

    // FORM (sementara kosong biar aman)
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
            'index'  => \App\Filament\Resources\Announcements\Pages\ListAnnouncements::route('/'),
            'create' => \App\Filament\Resources\Announcements\Pages\CreateAnnouncement::route('/create'),
            'edit'   => \App\Filament\Resources\Announcements\Pages\EditAnnouncement::route('/{record}/edit'),
            'view'   => \App\Filament\Resources\Announcements\Pages\ViewAnnouncement::route('/{record}'),
        ];
    }
}