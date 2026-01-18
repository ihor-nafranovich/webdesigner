<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TagsInput;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                TagsInput::make('technologies')
                    ->placeholder('Добавить технологию')
                    ->helperText('Нажмите Enter для добавления технологии'),
                FileUpload::make('image')
                    ->image()
                    ->directory('projects')
                    ->visibility('public')
                    ->disk('public')
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9',
                        '4:3',
                        '1:1',
                    ])
                    ->helperText('Рекомендуемый размер: 1200x675px (16:9)'),
                TextInput::make('demo_url')
                    ->url(),
                TextInput::make('github_url')
                    ->url(),
                Toggle::make('featured')
                    ->required(),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
