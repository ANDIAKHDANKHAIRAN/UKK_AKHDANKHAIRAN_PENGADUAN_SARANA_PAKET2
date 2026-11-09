<?php

namespace App\Filament\Resources\Pengaduans\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;
use Filament\Schemas\Schema;

class PengaduanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('siswa_id')
                    ->relationship('siswa', 'name')
                    ->label('Nama Siswa')
                    ->searchable()
                    ->preload()
                    ->required(),
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->label('Jenis Kategori')
                    ->searchable()
                    ->preload()
                    ->required(),
                TextInput::make('name')
                    ->label('Judul Laporan')
                    ->placeholder('Tuliskan  laporan...')
                    ->required(),
                Select::make('status')
                    ->options(['menunggu' => 'Menunggu', 'proses' => 'Proses', 'selesai' => 'Selesai'])
                    ->default('menunggu')
                    ->required(),
                TextInput::make('tempat')
                    ->label('Lokasi ')
                    ->required(),
                TextArea::make('description')
                    ->label('Uraian Laporan')
                    ->rows(4)
                    ->required(),
                TextInput::make('feedback')
                    ->label('Tanggapan Admin')
                    ->hiddenOn('create')
                    ->default(null),
            ]);
    }
}
