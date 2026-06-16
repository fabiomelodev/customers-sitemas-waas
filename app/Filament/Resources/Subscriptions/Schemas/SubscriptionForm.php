<?php

namespace App\Filament\Resources\Subscriptions\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SubscriptionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('asaas_subscription_id')
                    ->required(),
                Select::make('status')
                    ->options(['active' => 'Active', 'inactive' => 'Inactive'])
                    ->default('active')
                    ->required(),
                DatePicker::make('expires_at'),
                Select::make('plan_id')
                    ->relationship('plan', 'name'),
                Select::make('user_id')
                    ->relationship('user', 'name'),
                TextInput::make('template_id')
                    ->numeric(),
            ]);
    }
}
