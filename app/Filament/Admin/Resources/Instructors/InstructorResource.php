<?php

namespace App\Filament\Admin\Resources\Instructors;

use App\Filament\Admin\Resources\Instructors\Pages\CreateInstructor;
use App\Filament\Admin\Resources\Instructors\Pages\EditInstructor;
use App\Filament\Admin\Resources\Instructors\Pages\ListInstructors;
use App\Filament\Admin\Resources\Instructors\Pages\ViewInstructor;
use App\Filament\Admin\Resources\Instructors\Schemas\InstructorForm;
use App\Filament\Admin\Resources\Instructors\Schemas\InstructorInfolist;
use App\Filament\Admin\Resources\Instructors\Tables\InstructorsTable;
use BackedEnum;
use App\Models\Instructor;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class InstructorResource extends Resource
{
    protected static ?string $model = Instructor::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUser;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return InstructorForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return InstructorInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return InstructorsTable::configure($table);
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
            'index' => ListInstructors::route('/'),
            'create' => CreateInstructor::route('/create'),
            'view' => ViewInstructor::route('/{record}'),
            'edit' => EditInstructor::route('/{record}/edit'),
        ];
    }
}

