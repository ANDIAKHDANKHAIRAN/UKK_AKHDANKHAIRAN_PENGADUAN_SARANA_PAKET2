<?php

namespace App\Filament\Siswa\Resources\Siswas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SiswaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Lengkap')
                    ->required(),
                TextInput::make('nis')
                    ->label('Nomor Induk Siswa')
                    ->numeric()
                    ->required(),
                TextInput::make('kelas')
                    ->label('Kelas / Rombel')
                    ->required(),
            ]);
    }
}
