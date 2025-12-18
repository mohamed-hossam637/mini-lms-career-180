<?php

namespace App\Filament\Admin\Resources\FAQs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class FAQsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('question')
                    ->label('Question')
                    ->sortable()
                    ->searchable()
                    ->wrap(),
                TextColumn::make('answer')
                    ->label('Answer')
                    ->limit(100)
                    ->wrap(),
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

