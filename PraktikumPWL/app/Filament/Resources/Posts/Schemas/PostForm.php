<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\IconColumn;
use Filament\Schemas\Components\Section;
use Filament\Support\Assets\HeroIcon;
use Filament\Schemas\Components\Group;


class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                Section::make('Post Details')
                    ->Description ('Fill in the details of the post.')
                    // ->icon(HeroIcon::RocketLaunch)
                    ->icon('heroicon-o-document-text')
                    ->schema([
                Group::make([
                TextInput::make('title')
                    ->required()
                    ->minLength(5),
                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->preload()
                    ->searchable(),
                ColorPicker::make('color'),
                ])->columns(2),
                MarkdownEditor::make('content'),
                ])->columnSpan(2),

                Group::make([

                Group::make([
                Section::make('Image Upload')
                    ->icon('heroicon-o-photo')
                    ->schema([
                // RichEditor::make('content'),
                FileUpload::make('image')
                    ->disk('public')
                    ->directory('posts'),
                ]),

                Section::make('Meta Information')
                    ->icon('heroicon-o-tag')
                    ->schema([
                TagsInput::make('tags'),
                Checkbox::make('published'),
                DatePicker::make('published_at'),
                IconColumn::make('published')
                    ->boolean(),
                ]),
            ])
        ])->columnSpan(1)
    ])->columns(3);
    }
}
