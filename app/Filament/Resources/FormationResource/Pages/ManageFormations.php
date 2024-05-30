<?php

namespace App\Filament\Resources\FormationResource\Pages;

use App\Filament\Resources\FormationResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageFormations extends ManageRecords
{
    protected static string $resource = FormationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
