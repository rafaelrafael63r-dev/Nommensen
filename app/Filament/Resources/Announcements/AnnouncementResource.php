<?php

namespace App\Filament\Resources\Announcements;

use App\Models\Announcement;
use App\Filament\Resources\Announcements\Pages\CreateAnnouncement;
use App\Filament\Resources\Announcements\Pages\EditAnnouncement;
use App\Filament\Resources\Announcements\Pages\ViewAnnouncement;
use App\Filament\Resources\Announcements\Pages\ListAnnouncements;
use BackedEnum;
use UnitEnum;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Hidden;
use Filament\Support\Icons\Heroicon;
use Illuminate\Support\Str;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

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
    
    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('title')
                ->label('Judul Pengumuman')
                ->required()
                ->maxLength(255)
                ->placeholder('contoh: Jadwal UAS Semester Ganjil 2025/2026')
                ->helperText('Slug URL akan dibuat otomatis dari judul ini.')
                ->columnSpanFull(),

            RichEditor::make('content')
                ->label('Isi Pengumuman')
                ->toolbarButtons([
                    'bold',
                    'italic',
                    'underline',
                    'bulletList',
                    'orderedList',
                    'link',
                ])
                ->required()
                ->columnSpanFull(),

            Hidden::make('slug'),
            Hidden::make('users_id'),
        ]);
}

    // TABLE (sementara kosong)
    public static function table(Table $table): Table
{
    return $table
        ->columns([
            TextColumn::make('title')
                ->label('Judul')
                ->searchable()
                ->sortable()
                ->weight('bold')
                ->limit(50)
                ->tooltip(fn (?string $state): ?string => $state),

            TextColumn::make('content')
                ->label('Cuplikan')
                ->formatStateUsing(fn (?string $state): string => Str::limit(strip_tags($state ?? ''), 60))
                ->wrap()
                ->toggleable(),

            TextColumn::make('user.name')
                ->label('Dibuat Oleh')
                ->badge()
                ->color('info')
                ->sortable(),

            TextColumn::make('slug')
                ->label('Slug')
                ->copyable()
                ->copyMessage('Slug disalin!')
                ->limit(35)
                ->toggleable(isToggledHiddenByDefault: true),

            TextColumn::make('created_at')
                ->label('Diterbitkan')
                ->dateTime('d M Y H:i')
                ->sortable(),
        ])
        ->filters([
            //
        ])
        ->actions([
            EditAction::make(),
            DeleteAction::make(),
        ])
        ->bulkActions([
            BulkActionGroup::make([
                DeleteBulkAction::make(),
            ]),
        ])
        ->defaultSort('created_at', 'desc');
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
            'index'  => ListAnnouncements::route('/'),
            'create' => CreateAnnouncement::route('/create'),
            'view'   => ViewAnnouncement::route('/{record}'),
            'edit'   => EditAnnouncement::route('/{record}/edit'),
        ];
    }
}