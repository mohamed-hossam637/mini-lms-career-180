<?php

namespace App\Filament\Admin\Resources\FAQs\Pages;

use App\Filament\Admin\Resources\FAQs\FAQResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFAQs extends ListRecords
{
    protected static string $resource = FAQResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

