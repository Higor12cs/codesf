<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TechnicalChamberMemberResource\Pages;
use App\Models\TechnicalChamberMember;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TechnicalChamberMemberResource extends Resource
{
    protected static ?string $model = TechnicalChamberMember::class;

    protected static ?string $navigationGroup = 'Câmaras Técnicas';

    protected static ?string $navigationLabel = 'Membros';

    protected static ?string $modelLabel = 'membro';

    protected static ?string $pluralModelLabel = 'membros';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('technical_chamber_id')
                    ->label('Câmara Técnica')
                    ->required()
                    ->relationship(name: 'chamber', titleAttribute: 'name'),
                Forms\Components\TextInput::make('name')
                    ->label('Nome')
                    ->required(),
                Forms\Components\TextInput::make('url')
                    ->label('URL')
                    ->default('#'),
                Forms\Components\TextInput::make('order')
                    ->label('Ordem')
                    ->integer()
                    ->default(0),
                Forms\Components\Toggle::make('is_active')
                    ->label('Ativo')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('chamber.name')
                    ->label('Câmara Técnica'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('url')
                    ->searchable()
                    ->label('URL'),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Ativo')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Criado Em')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Atualizado Em')
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
            'index' => Pages\ManageTechnicalChamberMembers::route('/'),
        ];
    }
}
