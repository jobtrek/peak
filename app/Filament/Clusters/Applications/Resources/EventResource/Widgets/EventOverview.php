<?php

namespace App\Filament\Clusters\Applications\Resources\EventResource\Widgets;

use App\Models\Event;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Flowframe\Trend\Trend;

class EventOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $event = Trend::model(Event::class)
            ->between(
                start: now()->startOfWeek(),
                end: now()->endOfDay()
            )
            ->perDay()
            ->count();
        $event = $event->map(fn ($value) => $value->aggregate);

        return [
            Stat::make('Événements', $event->sum())
                ->description("Nombre d'événements dans le système")
                ->descriptionIcon('heroicon-o-calendar')
                ->color('info')
                ->chart($event->toArray()),
        ];
    }
}
