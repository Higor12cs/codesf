<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationLabel = 'Projetos';

    protected static ?string $modelLabel = 'projeto';

    protected static ?string $pluralModelLabel = 'projetos';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Fieldset::make('Informações do Projeto')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Título')
                            ->required()
                            ->columnSpan(1),
                        Forms\Components\TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->columnSpan(1),
                        Forms\Components\FileUpload::make('image')
                            ->label('Imagem')
                            ->required()
                            ->image()
                            ->columnSpan(2),
                    ]),

                Forms\Components\Fieldset::make('Conteúdo')
                    ->schema([
                        Forms\Components\RichEditor::make('description')
                            ->label('Conteúdo')
                            ->required()
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Fieldset::make('Publicação')
                    ->columns(2)
                    ->schema([
                        Forms\Components\DateTimePicker::make('published_at')
                            ->label('Publicado em')
                            ->default(now())
                            ->columnSpan(1),
                        Forms\Components\DateTimePicker::make('published_until')
                            ->label('Publicado até')
                            ->columnSpan(1),
                        Forms\Components\Toggle::make('is_published')
                            ->label('Publicado')
                            ->required()
                            ->default(true)
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Título')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image')
                    ->label('Imagem'),
                Tables\Columns\IconColumn::make('is_published')
                    ->label('Publicado')
                    ->boolean(),
                Tables\Columns\TextColumn::make('published_at')
                    ->label('Publicado em')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('published_until')
                    ->label('Publicado até')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Criado em')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Atualizado em')
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
