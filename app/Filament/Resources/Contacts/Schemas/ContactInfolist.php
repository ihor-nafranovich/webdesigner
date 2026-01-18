<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ContactInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name')
                    ->label('Имя'),
                TextEntry::make('email')
                    ->label('Email')
                    ->copyable(),
                TextEntry::make('message')
                    ->label('Сообщение')
                    ->columnSpanFull(),
                TextEntry::make('status')
                    ->label('Статус')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'new' => 'primary',
                        'read' => 'warning',
                        'replied' => 'success',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'new' => 'Новое',
                        'read' => 'Прочитано',
                        'replied' => 'Отвечено',
                        default => $state,
                    }),
                TextEntry::make('created_at')
                    ->label('Создано')
                    ->dateTime('d.m.Y H:i'),
                TextEntry::make('updated_at')
                    ->label('Обновлено')
                    ->dateTime('d.m.Y H:i'),
            ]);
    }
}
