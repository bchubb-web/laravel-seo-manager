<?php

namespace Bchubbweb\SeoManager;

use Filament\Forms\Form;

use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Tabs;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;


class SeoManager {
    public static function form(Form $form): Form
    {
        return $form
            ->columns(3)
            ->schema([
                Section::make([
                    Forms\Components\TextInput::make('route')
                        ->readOnly()
                        ->required(),
                    Forms\Components\TextInput::make('title')
                        ->label('Tab Title')
                        ->required(),
                    Forms\Components\TextInput::make('canonical')
                        ->label('Canonical URL'),

                ])->columns(1)->columnSpan(1),

                Tabs::make()
                    ->columnSpan(2)
                    ->tabs([
                        Tabs\Tab::make('Meta')
                            ->schema([

                                Forms\Components\Textarea::make('description')
                                    ->label('Description')
                                    ->rows(3),
                                Forms\Components\TagsInput::make('keywords')
                                    ->placeholder('Add a keyword')
                                    ->separator(','),

                            ]),
                        Tabs\Tab::make('Open Graph')
                            ->schema([
                                Forms\Components\TextInput::make('og_title')
                                    ->label('og:title'),
                                Forms\Components\FileUpload::make('og_image')
                                    ->imageEditor()
                                    ->label('og:image')
                                    ->hint('Used for hero on homepage*')
                                    ->image(),
                                Forms\Components\Textarea::make('og_description')
                                    ->label('og:description')
                                    ->rows(3),
                            ]),

                        Tabs\Tab::make('Twitter')
                            ->schema([
                                Forms\Components\TextInput::make('twitter_title')
                                    ->label('twitter:title'),
                                Forms\Components\FileUpload::make('twitter_image')
                                    ->imageEditor()
                                    ->label('twitter:image')
                                    ->image(),
                                Forms\Components\Textarea::make('twitter_description')
                                    ->label('twitter:description')
                                    ->rows(3),
                                Forms\Components\Select::make('twitter_card')
                                    ->label('twitter:card')
                                    ->options([
                                        'summary' => 'summary',
                                        'summary_large_image' => 'summary_large_image',
                                        'app' => 'app',
                                        'player' => 'player',
                                    ])
                                    ->default('summary_large_image'),
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('route')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make()->button()->label('Update'),
            ]);
    }

}
