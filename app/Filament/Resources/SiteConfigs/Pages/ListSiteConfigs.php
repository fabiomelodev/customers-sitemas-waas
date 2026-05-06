<?php

namespace App\Filament\Resources\SiteConfigs\Pages;

use App\Filament\Resources\SiteConfigs\SiteConfigResource;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;

class ListSiteConfigs extends ListRecords
{
    protected static string $resource = SiteConfigResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // CreateAction::make(),
        ];
    }

    protected function getTableQuery(): Builder|Relation|null
    {
        return static::getResource()::getEloquentQuery()->where('user_id', auth()->id());
    }
}
