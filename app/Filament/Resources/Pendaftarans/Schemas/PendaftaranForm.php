<?php

namespace App\Filament\Resources\Pendaftarans\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PendaftaranForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_lengkap')
                    ->required()
                    ->maxLength(255),

                TextInput::make('email')
                    ->email()
                    ->required(),

                TextInput::make('nomor_telepon')
                    ->tel()
                    ->required(),

                Select::make('category_id')
                    ->label('Jurusan')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),

                Textarea::make('alamat')
                    ->label('Alamat')
                    ->columnSpanFull(),

                Select::make('status')
                    ->label('Status')
                    ->options([
                        'pending' => 'Pending',
                        'diterima' => 'Diterima',
                        'ditolak' => 'Ditolak',
                    ])
                    ->default('pending')
                    ->required(),
            ]);
    }
}
