<?php

namespace App\Filament\Resources\TechnicalChamberMemberResource\Pages;

use App\Filament\Resources\TechnicalChamberMemberResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageTechnicalChamberMembers extends ManageRecords
{
    protected static string $resource = TechnicalChamberMemberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
