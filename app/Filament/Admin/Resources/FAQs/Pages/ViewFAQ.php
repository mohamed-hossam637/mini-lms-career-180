<?php

namespace App\Filament\Admin\Resources\FAQs\Pages;

use App\Filament\Admin\Resources\FAQs\FAQResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewFAQ extends ViewRecord
{
    protected static string $resource = FAQResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}

