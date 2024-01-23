<?php

namespace App\Filament\Clusters\Applications\Resources\EventResource\Pages;

use App\Filament\Clusters\Applications\Resources\EventResource;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListEvents extends ListRecords
{
    protected static string $resource = EventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    /** No tabs for now
    public function getTabs(): array
    {
        return [
            'all' => Tab::make('Tous les événements'),
            'from-today' => Tab::make('Depuis aujourd\'hui')
                ->modifyQueryUsing(fn (Builder $query) => $query->whereDate('start_at', '>=', now()->startOfDay())),
            'before-today' => Tab::make('Evénements passés')
                ->modifyQueryUsing(fn (Builder $query) => $query->whereDate('end_at', '<', now())),
        ];
    }*/
}
