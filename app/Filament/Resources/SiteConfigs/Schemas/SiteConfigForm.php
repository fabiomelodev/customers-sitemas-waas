<?php

namespace App\Filament\Resources\SiteConfigs\Schemas;

use Filament\Forms\Components\{FileUpload, TextInput};
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SiteConfigForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(12)
            ->components([
                Section::make()
                    ->columnSpan(9)
                    ->schema([
                        TextInput::make('company_name')
                            ->label('Nome da Empresa')
                            ->required(),
                        TextInput::make('domain')
                            ->label('Domínio')
                            ->required(),
                    ]),
                Section::make()
                    ->columnSpan(3)
                    ->schema([
                        FileUpload::make('brand')
                            ->label('Logo')
                            ->image(),
                        TextInput::make('whatsapp'),
                        TextInput::make('instagram'),
                        TextInput::make('facebook'),
                    ])
            ]);
    }
}
