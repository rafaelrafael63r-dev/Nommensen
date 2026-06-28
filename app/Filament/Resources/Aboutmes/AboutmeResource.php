<?php

namespace App\Filament\Resources\AboutMe;

use App\Models\AboutMe;
use BackedEnum;
use UnitEnum;
use App\Filament\Resources\Aboutmes\Tables\AboutmesTable;
use App\Filament\Resources\Aboutmes\Forms\AboutmesForm;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Forms;
use Filament\Schemas\Components\Textarea;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class AboutMeResource extends Resource
{
    // MODEL
    protected static string|null $model = AboutMe::class;

    // ICON
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-information-circle';

    // LABEL
    protected static ?string $navigationLabel = 'Profil Universitas';
    protected static ?string $modelLabel = 'Profil';
    protected static ?string $pluralModelLabel = 'Profil Universitas';

    // GROUP & SORT (FIX TYPE)
    protected static string|UnitEnum|null $navigationGroup = 'Profil Universitas';
    protected static ?int $navigationSort = 1;

    // TITLE
    protected static ?string $recordTitleAttribute = 'judul';

    // FORM (sementara kosong)
    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextArea::make('content')
                    ->label('Deskripsi Profil')
                    ->required()
                    ->rows(5)
                    ->placeholder('Tuliskan profil singkat universitas (keunggulan, fokus pendidikan, dll.)')
                    ->helperText('Deskripsi singkat tanpa formatting. Untuk konten berformat gunakan menu Sejarah.')
                    ->columnSpanFull(),

                FileUpload::make('image')
                    ->label('Foto (Multiple)')
                    ->image()
                    ->multiple()
                    ->reorderable()
                    ->maxFiles(5)
                    ->directory('aboutmes')
                    ->visibility('public')
                    ->imagePreviewHeight('120')
                    ->maxSize(2048)
                    ->required()
                    ->helperText('Bisa upload beberapa foto sekaligus. Maks 5 foto, masing-masing 2MB.')
                    ->columnSpanFull(),
            ]);
    }

    // TABLE (sementara kosong)
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Foto')
                    ->disk('public')
                    ->height(50)
                    ->stacked()
                    ->limit(3)
                    ->limitedRemainingText(),

                TextColumn::make('content')
                    ->label('Deskripsi')
                    ->formatStateUsing(fn (?string $state): string => Str::limit(strip_tags($state ?? ''), 100))
                    ->wrap()
                    ->searchable(),

                TextColumn::make('created_at')
                    ->label('Ditambahkan')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->label('Diperbarui')
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
            ->defaultSort('updated_at', 'desc');
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
            'index'  => \App\Filament\Resources\AboutMe\Pages\ListAboutMe::route('/'),
            'create' => \App\Filament\Resources\AboutMe\Pages\CreateAboutMe::route('/create'),
            'edit'   => \App\Filament\Resources\AboutMe\Pages\EditAboutMe::route('/{record}/edit'),
            'view'   => \App\Filament\Resources\AboutMe\Pages\ViewAboutMe::route('/{record}'),
        ];
    }
}