<?php

namespace App\Filament\Resources\DailyPlannerResource\Pages;

use App\Filament\Resources\DailyPlannerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDailyPlanner extends EditRecord
{
    protected static string $resource = DailyPlannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
