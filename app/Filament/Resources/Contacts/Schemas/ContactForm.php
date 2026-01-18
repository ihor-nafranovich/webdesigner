<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ContactForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Имя')
                    ->required()
                    ->maxLength(255),
                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Textarea::make('message')
                    ->label('Сообщение')
                    ->required()
                    ->rows(6)
                    ->columnSpanFull(),
                Select::make('status')
                    ->label('Статус')
                    ->options([
                        'new' => 'Новое',
                        'read' => 'Прочитано',
                        'replied' => 'Отвечено',
                    ])
                    ->default('new')
                    ->required(),
            ]);
    }
}
