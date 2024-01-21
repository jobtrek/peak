<?php

namespace App\Filament\Clusters\Applications\Resources\EventResource\Pages;

use App\Filament\Clusters\Applications\Resources\EventResource;
use Filament\Resources\Pages\CreateRecord;

class CreateEvent extends CreateRecord
{
    protected static string $resource = EventResource::class;

    #[\Override]
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['creator_id'] = auth()->id();

        return $data;
    }
}
