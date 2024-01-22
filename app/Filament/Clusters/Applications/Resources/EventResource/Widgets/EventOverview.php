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
            ->dateColumn('start_at')
            ->between(
                start: now()->startOfWeek(),
                end: now()->endOfWeek()
            )
            ->perDay()
            ->count();
        $event = $event->map(fn ($value) => $value->aggregate);

        $total = $event->sum();

        $stat = Stat::make('Événements de la semaine', $total)
            ->icon('heroicon-o-calendar')
            ->description('Du '.now()->startOfWeek()->format('d/m/Y').' au '.now()->endOfWeek()->format('d/m/Y'))
            ->color('info');

        if ($total > 0) {
            $stat->chart($event->toArray());
        }

        return [
            $stat,
        ];
    }
}
