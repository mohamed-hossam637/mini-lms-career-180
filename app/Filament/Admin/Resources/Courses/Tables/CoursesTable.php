<?php

namespace App\Filament\Admin\Resources\Courses\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\BooleanColumn;

class CoursesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Title')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('instructor.name')
                    ->label('Instructor')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('category.title')
                    ->label('Category')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('level.title')
                    ->label('Level')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('ratings')
                    ->label('Ratings')
                    ->sortable()
                    ->numeric(decimalPlaces: 2),
                BooleanColumn::make('is_featured')
                    ->label('Featured')
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Created At')
                    ->sortable()
                    ->dateTime('d-m-Y H:i:s'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}

