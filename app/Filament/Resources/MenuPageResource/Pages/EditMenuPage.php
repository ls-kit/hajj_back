<?php

namespace App\Filament\Resources\MenuPageResource\Pages;

use App\Filament\Resources\MenuPageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMenuPage extends EditRecord
{
    protected static string $resource = MenuPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
