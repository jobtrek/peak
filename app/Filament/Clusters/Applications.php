<?php

namespace App\Filament\Clusters;

use Filament\Clusters\Cluster;

class Applications extends Cluster
{
    protected static ?string $navigationIcon = 'heroicon-o-users';

    #[\Override]
    public static function getNavigationLabel(): string
    {
        return 'Postulations';
    }
}
