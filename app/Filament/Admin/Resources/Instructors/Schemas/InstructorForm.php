<?php

namespace App\Filament\Admin\Resources\Instructors\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class InstructorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('title')
                    ->maxLength(255),
                Textarea::make('bio')
                    ->rows(4)
                    ->columnSpanFull(),
                TextInput::make('linkedin_url')
                    ->label('LinkedIn URL')
                    ->url()
                    ->maxLength(255),
                TextInput::make('avatar_url')
                    ->label('Avatar URL')
                    ->url()
                    ->maxLength(255),
            ]);
    }
}

