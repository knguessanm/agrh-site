<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SessionsResource\Pages;
use App\Filament\Resources\SessionsResource\RelationManagers;
use App\Models\Sessions;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SessionsResource extends Resource
{
    protected static ?string $model = Sessions::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'content';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('formation')
                    ->required()
                    ->numeric(),
                Forms\Components\DateTimePicker::make('date_sessions')
                    ->label('Date de la session')
                    ->required(),
                Forms\Components\TextInput::make('lieu')
                    ->required()
                    ->maxLength(2048),
                Forms\Components\Select::make('formateur')
                    ->relationship('formateur', 'title')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('formation_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('date_sessions')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('lieu')
                    ->searchable(),
                TextColumn::make('formateur.id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageSessions::route('/'),
        ];
    }
}
