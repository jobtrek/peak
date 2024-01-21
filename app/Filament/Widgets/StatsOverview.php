<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?string $pollingInterval = '160s';

    protected function getStats(): array
    {
        $user = User::count();
        return [
            Stat::make('Utilisateurs', $user)
                ->description("Nombre d'utilisateurs dans le système")
                ->descriptionIcon('heroicon-o-user-group')
                ->color('info'),
        ];
    }
}
