<?php

namespace App\Filament\Resources\SiteConfigs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\{IconColumn, TextColumn};
use Filament\Tables\Table;

class SiteConfigsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->paginated(false)
            ->columns([
                TextColumn::make('company_name')
                    ->label('Nome da Empresa')
                    ->searchable(),
                TextColumn::make('domain')
                    ->label('Domínio')
                    ->searchable(),
                TextColumn::make('subscription.plan.name')
                    ->label('Plano'),
                IconColumn::make('status'),
                TextColumn::make('created_at')
                    ->label('Criado Em')
                    ->dateTime('d/m/Y')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make()
                    ->iconButton(),
            ])
            ->toolbarActions([
            ]);
    }
}
