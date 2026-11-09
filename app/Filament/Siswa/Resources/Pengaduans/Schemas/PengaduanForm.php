<?php

namespace App\Filament\Siswa\Resources\Pengaduans\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PengaduanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('siswa_id')
                    ->relationship('siswa', 'name')
                    ->label('Nama Saya')
                    ->searchable()
                    ->preload()
                    ->required(),
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->label('Jenis Laporan')
                    ->searchable()
                    ->preload()
                    ->required(),
                TextInput::make('name')
                    ->label('Judul Laporan')
                    ->placeholder('Tuliskan judul singkat laporan...')
                    ->required(),
                Select::make('status')
                    ->options(['menunggu' => 'Menunggu', 'proses' => 'Proses', 'selesai' => 'Selesai'])
                    ->default('menunggu')
                    ->disabled()
                    ->required(),
                TextInput::make('tempat')
                    ->label('Lokasi Kejadian')
                    ->required(),
                TextInput::make('description')
                    ->label('Uraian Laporan')
                    ->required(),
                TextInput::make('feedback')
                    ->label('Tanggapan')
                    ->disabled()
                    ->default(null),
            ]);
    }
}
