<?php

namespace App\Filament\Resources\MenuPageResource\Pages;

use App\Filament\Resources\MenuPageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMenuPages extends ListRecords
{
    protected static string $resource = MenuPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
