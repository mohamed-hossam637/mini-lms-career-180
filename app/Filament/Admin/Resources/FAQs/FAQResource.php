<?php

namespace App\Filament\Admin\Resources\FAQs;

use App\Filament\Admin\Resources\FAQs\Pages\CreateFAQ;
use App\Filament\Admin\Resources\FAQs\Pages\EditFAQ;
use App\Filament\Admin\Resources\FAQs\Pages\ListFAQs;
use App\Filament\Admin\Resources\FAQs\Pages\ViewFAQ;
use App\Filament\Admin\Resources\FAQs\Schemas\FAQForm;
use App\Filament\Admin\Resources\FAQs\Schemas\FAQInfolist;
use App\Filament\Admin\Resources\FAQs\Tables\FAQsTable;
use BackedEnum;
use App\Models\FAQ;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class FAQResource extends Resource
{
    protected static ?string $model = FAQ::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedQuestionMarkCircle;

    protected static ?string $recordTitleAttribute = 'question';

    public static function form(Schema $schema): Schema
    {
        return FAQForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return FAQInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FAQsTable::configure($table);
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
            'index' => ListFAQs::route('/'),
            'create' => CreateFAQ::route('/create'),
            'view' => ViewFAQ::route('/{record}'),
            'edit' => EditFAQ::route('/{record}/edit'),
        ];
    }
}

