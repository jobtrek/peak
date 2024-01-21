<?php

namespace App\Filament\Clusters\Applications\Resources\EventResource\Pages;

use App\Filament\Clusters\Applications\Resources\EventResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEvent extends CreateRecord
{
    protected static string $resource = EventResource::class;
}
