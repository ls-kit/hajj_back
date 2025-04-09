<?php

namespace App\Filament\Resources\DailyPlannerResource\Pages;

use App\Filament\Resources\DailyPlannerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDailyPlanners extends ListRecords
{
    protected static string $resource = DailyPlannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
