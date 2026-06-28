<?php

namespace App\Filament\Resources\Rektors;

use App\Filament\Resources\Rektors\Pages\CreateRektor;
use App\Filament\Resources\Rektors\Pages\EditRektor;
use App\Filament\Resources\Rektors\Pages\ListRektors;
use App\Filament\Resources\Rektors\Pages\ViewRektor;
use App\Filament\Resources\Rektors\Schemas\RektorForm;
use App\Filament\Resources\Rektors\Schemas\RektorInfolist;
use App\Filament\Resources\Rektors\Tables\RektorsTable;
use App\Models\Rektor;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class RektorResource extends Resource
{
    protected static ?string $model = Rektor::class;

    // ✅ NAVIGATION (pakai method biar tidak merah)
    public static function getNavigationIcon(): ?string
    {
        return 'heroicon-o-star';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Manajemen SDM';
    }

    public static function getNavigationLabel(): string
    {
        return 'Pimpinan';
    }

    public static function getModelLabel(): string
    {
        return 'Pimpinan';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Pimpinan';
    }

    public static function getNavigationSort(): ?int
    {
        return 3;
    }

    protected static ?string $recordTitleAttribute = 'Rektor';

    // =========================
    // FORM
    // =========================
    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->label('Nama Lengkap')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('contoh: Prof. Dr. H. Maman Suherman, M.Pd.'),

                TextInput::make('jabatan')
                    ->label('Jabatan')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('contoh: Rektor / Wakil Rektor I / Wakil Rektor II')
                    ->helperText('Tuliskan jabatan struktural di pimpinan universitas.'),

                FileUpload::make('image')
                    ->label('Foto')
                    ->image()
                    ->directory('rektors')
                    ->visibility('public')
                    ->imagePreviewHeight('200')
                    ->maxSize(2048)
                    ->required()
                    ->helperText('Upload foto formal dengan latar polos. Format: JPG, PNG. Maks 2MB.')
                    ->columnSpanFull(),
            ])
            ->columns(2);
    }

    // =========================
    // INFOLIST
    // =========================
    public static function infolist(Schema $schema): Schema
    {
        return RektorInfolist::configure($schema);
    }

    // =========================
    // TABLE
    // =========================
    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            ImageColumn::make('image')
                ->label('Foto')
                ->disk('public')
                ->height(80)
                ->circular(),

            TextColumn::make('nama')
                ->label('Nama Lengkap')
                ->searchable()
                ->sortable()
                ->weight('bold'),

            TextColumn::make('jabatan')
                ->label('Jabatan')
                ->searchable()
                ->sortable()
                ->badge()
                ->color('warning'),

            TextColumn::make('created_at')
                ->label('Ditambahkan')
                ->dateTime('d M Y H:i')
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),

            TextColumn::make('updated_at')
                ->label('Diperbarui')
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
        ->defaultSort('id', 'asc');

    }    // =========================
    // RELATION
    // =========================
    public static function getRelations(): array
    {
        return [];
    }

    // =========================
    // PAGES
    // =========================
    public static function getPages(): array
    {
        return [
            'index' => ListRektors::route('/'),
            'create' => CreateRektor::route('/create'),
            'view' => ViewRektor::route('/{record}'),
            'edit' => EditRektor::route('/{record}/edit'),
        ];
    }
}