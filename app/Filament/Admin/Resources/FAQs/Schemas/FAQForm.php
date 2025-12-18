<?php

namespace App\Filament\Admin\Resources\FAQs\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class FAQForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('question')
                    ->required()
                    ->maxLength(255),
                Textarea::make('answer')
                    ->required()
                    ->rows(4)
                    ->columnSpanFull(),
            ]);
    }
}

