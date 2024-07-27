<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationLabel = 'Notícias';

    protected static ?string $modelLabel = 'notícia';

    protected static ?string $pluralModelLabel = 'notícias';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Fieldset::make('Informações da Notícia')
                    ->columns(3)
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Título')
                            ->required()
                            ->columnSpan(1),
                        Forms\Components\TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->columnSpan(1),
                        Forms\Components\TextInput::make('url')
                            ->label('URL')
                            ->columnSpanFull()
                            ->columnSpan(1),
                        Forms\Components\FileUpload::make('image')
                            ->label('Imagem')
                            ->required()
                            ->image()
                            ->columnSpan(3),
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
                    ->label('Imagem')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_published')
                    ->label('Publicado')
                    ->boolean(),
                Tables\Columns\TextColumn::make('published_at')
                    ->label('Publicado Em')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('published_until')
                    ->label('Publicado Até')
                    ->dateTime()
                    ->sortable(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
