<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MenuPageResource\Pages;
use App\Models\MenuPage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables; // ✅ Correct namespace for table stuff
use Filament\Tables\Table; // ✅ Use this instead of Filament\Resources\Table

class MenuPageResource extends Resource
{
    protected static ?string $model = MenuPage::class;

    protected static ?string $navigationIcon = 'heroicon-o-document';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('menu_item_id')
                ->relationship('menuItem', 'title')
                ->required(),
            Forms\Components\TextInput::make('title')->required(),
            Forms\Components\Textarea::make('content'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('menuItem.title')->label('Menu Item'),
            Tables\Columns\TextColumn::make('title'),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMenuPages::route('/'),
            'create' => Pages\CreateMenuPage::route('/create'),
            'edit' => Pages\EditMenuPage::route('/{record}/edit'),
        ];
    }
}
