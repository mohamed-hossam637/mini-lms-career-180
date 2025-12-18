<?php

namespace App\Filament\Admin\Resources\Levels;

use App\Filament\Admin\Resources\Levels\Pages\CreateLevel;
use App\Filament\Admin\Resources\Levels\Pages\EditLevel;
use App\Filament\Admin\Resources\Levels\Pages\ListLevels;
use App\Filament\Admin\Resources\Levels\Pages\ViewLevel;
use App\Filament\Admin\Resources\Levels\Schemas\LevelForm;
use App\Filament\Admin\Resources\Levels\Schemas\LevelInfolist;
use App\Filament\Admin\Resources\Levels\Tables\LevelsTable;
use BackedEnum;
use App\Models\Level;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LevelResource extends Resource
{
    protected static ?string $model = Level::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBars3BottomLeft;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return LevelForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return LevelInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LevelsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListLevels::route('/'),
            'create' => CreateLevel::route('/create'),
            'view' => ViewLevel::route('/{record}'),
            'edit' => EditLevel::route('/{record}/edit'),
        ];
    }
}
