<?php

namespace App\Filament\Pages;

use App\Filament\Clusters\Applications;
use App\Filament\Clusters\Applications\Resources\EventResource\Widgets\EventOverview;
use Filament\Actions\Action;
use Filament\Pages\Page;

class ApplicationsSummary extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.applications-summary';

    protected static ?string $cluster = Applications::class;

    protected static ?string $title = 'Résumé postulations';

    protected ?string $heading = 'Résumé de l\'état des postulations';

    protected static ?string $navigationLabel = 'Résumé';

    #[\Override]
    public static function canAccess(array $parameters = []): bool
    {
        return auth()->user()->can('page_ApplicationsSummary');
    }

    protected function getHeaderActions(): array
    {
        return [
            Action::make('create')->url('events.create'),
        ];
    }

    #[\Override]
    protected function getHeaderWidgets(): array
    {
        return [
            EventOverview::class,
        ];
    }
}
