<?php

namespace App\Filament\Resources\TechnicalChamberResource\Pages;

use App\Filament\Resources\TechnicalChamberResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageTechnicalChambers extends ManageRecords
{
    protected static string $resource = TechnicalChamberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
