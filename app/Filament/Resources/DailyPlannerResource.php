<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DailyPlannerResource\Pages;
use App\Filament\Resources\DailyPlannerResource\RelationManagers;
use App\Models\DailyPlanner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DailyPlannerResource extends Resource
{
    protected static ?string $model = DailyPlanner::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
{
    return $form->schema([
        Forms\Components\TextInput::make('day_number')
            ->label('Day Number')
            ->required()
            ->numeric(),

        Forms\Components\TextInput::make('title_bn')
            ->label('Title (Bangla)')
            ->required(),

        Forms\Components\Textarea::make('details_bn')
            ->label('Details (Bangla)')
            ->required(),
    ]);
}


public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\TextColumn::make('day_number')->sortable(),
            Tables\Columns\TextColumn::make('title_bn')->label('Title'),
            Tables\Columns\TextColumn::make('created_at')->date('d M Y'),
        ])
        ->filters([])
        ->actions([
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
}


    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDailyPlanners::route('/'),
            'create' => Pages\CreateDailyPlanner::route('/create'),
            'edit' => Pages\EditDailyPlanner::route('/{record}/edit'),
        ];
    }
}
