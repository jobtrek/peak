<?php

namespace App\Filament\Clusters\Applications\Resources\EventResource\Widgets;

use App\Models\Event;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class EventOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $event = Event::count();
        return [
            Stat::make('Events', $event)
                ->description("Nombre d'événements dans le système")
                ->descriptionIcon('heroicon-o-calendar')
                ->color('info'),
        ];
    }
}
