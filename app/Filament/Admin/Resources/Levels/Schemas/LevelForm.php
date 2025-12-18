<?php

namespace App\Filament\Admin\Resources\Levels\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class LevelForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
            ]);
    }
}
