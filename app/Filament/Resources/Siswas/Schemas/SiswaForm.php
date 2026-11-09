<?php

namespace App\Filament\Resources\Siswas\Schemas;

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
                    ->label('NIS')
                    ->numeric()
                    ->required(),
                TextInput::make('kelas')
                    ->label('Kelas')
                    ->required(),
            ]);
    }
}
