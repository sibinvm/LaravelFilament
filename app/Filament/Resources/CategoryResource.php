<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Filament\Roles;
use Filament\Resources\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Columns;
use Filament\Resources\Tables\Filter;
use Filament\Resources\Tables\Table;

class CategoryResource extends Resource
{
    public static $icon = 'heroicon-o-collection';

    public static function form(Form $form)
    {
        return $form
            ->schema([
                Components\TextInput::make('name')->autofocus()->required(),
                // Components\TextInput::make('category')->email()->required(),
                // Components\TextInput::make('category')->required(),
                // Components\Select::make('type')
                //     ->placeholder('Select a type')
                //     ->options([
                //         'individual' => 'Individual',
                //         'organization' => 'Organization',
                //     ]),
                // Components\DatePicker::make('birthday'),
            ]);
    }

    public static function table(Table $table)
    {
        return $table
            ->columns([
                Columns\Text::make('name')->sortable()->searchable(),
            ])
            ->filters([
                //
            ]);
    }

    public static function relations()
    {
        return [
            //
        ];
    }

    public static function routes()
    {
        return [
            Pages\ListCategories::routeTo('/', 'index'),
            Pages\CreateCategory::routeTo('/create', 'create'),
            Pages\EditCategory::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
