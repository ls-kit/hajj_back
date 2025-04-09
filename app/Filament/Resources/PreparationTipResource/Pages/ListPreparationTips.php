<?php

namespace App\Filament\Resources\PreparationTipResource\Pages;

use App\Filament\Resources\PreparationTipResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPreparationTips extends ListRecords
{
    protected static string $resource = PreparationTipResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
