<?php

namespace App\Filament\Resources\Admins;

use App\Filament\Resources\Admins\Pages\CreateAdmin;
use App\Filament\Resources\Admins\Pages\EditAdmin;
use App\Filament\Resources\Admins\Pages\ListAdmins;
use App\Filament\Resources\Admins\Pages\ViewAdmin;
use App\Models\Admin;
use BackedEnum;
use UnitEnum;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;

class AdminResource extends Resource
{
    // MODEL
    protected static string|null $model = Admin::class;

    // ICON (dari kamu, sudah diperbaiki)
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-user-circle';

    // LABEL
    protected static ?string $navigationLabel = 'Admin / Staf';
    protected static ?string $modelLabel = 'Admin';
    protected static ?string $pluralModelLabel = 'Admin / Staf';

    // GROUP & SORT (FIX)
    protected static string|UnitEnum|null $navigationGroup = 'Manajemen SDM';
    protected static ?int $navigationSort = 2;

    // TITLE
    protected static ?string $recordTitleAttribute = 'nama';

    // FORM (contoh umum admin/staf)
    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('nama')
                    ->label('Nama Lengkap')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('contoh: Drs. Budi Santoso, M.M.'),

                TextInput::make('nip')
                    ->label('NIP')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('contoh: 197505102001011001')
                    ->helperText('Nomor Induk Pegawai (boleh berupa NIP atau NIPK).'),

                TextInput::make('jabatan')
                    ->label('Jabatan')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('contoh: Kepala Tata Usaha'),

                FileUpload::make('image')
                    ->label('Foto')
                    ->image()
                    ->directory('admins')
                    ->visibility('public')
                    ->imagePreviewHeight('150')
                    ->maxSize(2048)
                    ->required()
                    ->helperText('Upload foto formal. Format: JPG, PNG. Maks 2MB.')
                    ->columnSpanFull(),
            ])
            ->columns(2);
    }

    // INFOLIST
    public static function infolist(Schema $schema): Schema
    {
        return $schema;
    }

    // TABLE
    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            ImageColumn::make('image')
                ->label('Foto')
                ->disk('public')
                ->height(60)
                ->circular(),

            TextColumn::make('nama')
                ->label('Nama Lengkap')
                ->searchable()
                ->sortable(),

            TextColumn::make('nip')
                ->label('NIP')
                ->searchable()
                ->copyable()
                ->copyMessage('NIP berhasil disalin!'),

            TextColumn::make('jabatan')
                ->label('Jabatan')
                ->searchable()
                ->sortable()
                ->badge()
                ->color('info'),

            TextColumn::make('created_at')
                ->label('Ditambahkan')
                ->dateTime('d M Y H:i')
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
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
        ->defaultSort('nama', 'asc');


    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index'  => ListAdmins::route('/'),
            'create' => CreateAdmin::route('/create'),
            'view'   => ViewAdmin::route('/{record}'),
            'edit'   => EditAdmin::route('/{record}/edit'),
        ];
    }
}