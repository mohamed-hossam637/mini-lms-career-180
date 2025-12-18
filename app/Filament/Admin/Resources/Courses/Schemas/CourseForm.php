<?php

namespace App\Filament\Admin\Resources\Courses\Schemas;

use App\Models\Category;
use App\Models\Instructor;
use App\Models\Level;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;

class CourseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                RichEditor::make('description')
                    ->required()
                    ->columnSpanFull(),
                Select::make('instructor_id')
                    ->label('Instructor')
                    ->relationship('instructor', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                Select::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'title')
                    ->searchable()
                    ->preload()
                    ->required(),
                Select::make('level_id')
                    ->label('Level')
                    ->relationship('level', 'title')
                    ->searchable()
                    ->preload()
                    ->required(),
                TextInput::make('ratings')
                    ->label('Ratings')
                    ->numeric()
                    ->step(0.01)
                    ->minValue(0)
                    ->maxValue(5),
                Toggle::make('is_featured')
                    ->label('Featured'),
                Repeater::make('who_takes_this_course')
                    ->label('Who Takes This Course')
                    ->schema([
                        TextInput::make('item')
                            ->label('Item')
                            ->required()
                            ->maxLength(255),
                    ])
                    ->defaultItems(1)
                    ->afterStateHydrated(function ($component, $state) {
                        // Convert simple array to Repeater format
                        if (is_array($state) && isset($state[0]) && is_string($state[0])) {
                            $component->state(array_map(fn($item) => ['item' => $item], $state));
                        }
                    })
                    ->columnSpanFull(),
            ]);
    }
}
