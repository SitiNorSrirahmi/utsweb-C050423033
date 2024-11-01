<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DonasiResource\Pages;
use App\Filament\Resources\DonasiResource\RelationManagers;
use App\Models\Donasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DonasiResource extends Resource
{
    protected static ?string $model = Donasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $pluralLabel = 'Donasi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('donor_id')
                ->relationship('donor', 'nama') // Ganti 'nama' dengan nama kolom yang sesuai di tabel donor
                ->required(),
            Forms\Components\TextInput::make('jumlah')
                ->required()
                ->numeric()
                ->minValue(0), // Pastikan jumlah tidak negatif
            Forms\Components\DatePicker::make('tanggal_donasi')
                ->required()
                ->default(now()), // Set default ke tanggal saat ini
            Forms\Components\TextInput::make('metode_pembayaran')
                ->required(),
            Forms\Components\Select::make('status')
                ->options([
                    'pending' => 'Pending',
                    'diterima' => 'Diterima',
                    'dibatalkan' => 'Dibatalkan',
                ])
                ->required(),
        ]);
}

public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\TextColumn::make('id')->sortable(),
            Tables\Columns\TextColumn::make('donor.nama')->label('Donor'), // Menampilkan nama donor
            Tables\Columns\TextColumn::make('jumlah')->sortable(),
            Tables\Columns\TextColumn::make('tanggal_donasi')->sortable(),
            Tables\Columns\TextColumn::make('metode_pembayaran'),
            Tables\Columns\TextColumn::make('status'),
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
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
            'index' => Pages\ListDonasis::route('/'),
            'create' => Pages\CreateDonasi::route('/create'),
            'edit' => Pages\EditDonasi::route('/{record}/edit'),
        ];
    }
}
