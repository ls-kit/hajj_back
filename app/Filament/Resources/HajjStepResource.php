<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HajjStepResource\Pages;
use App\Filament\Resources\HajjStepResource\RelationManagers;
use App\Models\HajjStep;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HajjStepResource extends Resource
{
    protected static ?string $model = HajjStep::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
{
    return $form->schema([
        Forms\Components\TextInput::make('step_number')
            ->label('Step Number')
            ->required()
            ->numeric(),

        Forms\Components\TextInput::make('title_bn')
            ->label('Title (Bangla)')
            ->required(),

        Forms\Components\Textarea::make('description_bn')
            ->label('Description (Bangla)')
            ->required(),

        Forms\Components\FileUpload::make('image')
            ->image()
            ->label('Step Image')
            ->directory('hajj-steps'), // saves in storage/app/public/hajj-steps
    ]);
}


public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\TextColumn::make('step_number'),
            Tables\Columns\TextColumn::make('title_bn')->label('Title'),
            Tables\Columns\TextColumn::make('created_at')->dateTime('d M Y'),
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
            'index' => Pages\ListHajjSteps::route('/'),
            'create' => Pages\CreateHajjStep::route('/create'),
            'edit' => Pages\EditHajjStep::route('/{record}/edit'),
        ];
    }
}
