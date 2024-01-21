<?php

namespace App\Filament\Clusters\Applications\Resources;

use App\Filament\Clusters\Applications;
use App\Filament\Clusters\Applications\Resources\EventResource\Pages;
use App\Filament\Clusters\Applications\Resources\EventResource\RelationManagers\EventTypesRelationManager;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    protected static ?string $cluster = Applications::class;

    protected static ?string $recordTitleAttribute = 'name';

    protected static int $globalSearchResultsLimit = 10;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->columns(1)
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->autofocus()
                            ->required()
                            ->minLength(3)
                            ->maxLength(230)
                            ->label(__('event.name_label'))
                            ->placeholder(__('event.name_placeholder')),
                        Forms\Components\Fieldset::make('Dates')
                            ->schema([
                                Forms\Components\DateTimePicker::make('start_at')
                                    ->required()
                                    ->native(false)
                                    ->hoursStep(1)
                                    ->minutesStep(15)
                                    ->minDate(now()->startOfDay())
                                    ->maxDate(now()->addYear(2))
                                    ->closeOnDateSelection()
                                    ->seconds(false)
                                    ->label(__('event.start_at_label')),
                                Forms\Components\DateTimePicker::make('end_at')
                                    ->required()
                                    ->native(false)
                                    ->hoursStep(1)
                                    ->minutesStep(15)
                                    ->minDate(now()->startOfDay())
                                    ->maxDate(now()->addYear(2))
                                    ->after('start_at')
                                    ->closeOnDateSelection()
                                    ->seconds(false)
                                    ->label(__('event.end_at_label')),
                            ])
                            ->columns(2),
                        Forms\Components\Fieldset::make('Associer à au minimum un type d\'événement')
                            ->schema([
                                Forms\Components\Select::make('event_type_id')
                                    ->required()
                                    ->searchable()
                                    ->multiple()
                                    ->preload()
                                    ->relationship('eventTypes', 'name')
                                    ->label(__('event.type')),
                            ])
                            ->columns(1)
                            ->hiddenOn('edit'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->limit(80)
                    ->label(__('event.name_label')),
                Tables\Columns\TextColumn::make('start_at')
                    ->searchable()
                    ->sortable()
                    ->dateTime('Y-m-d H:i')
                    ->label(__('event.start_at_label')),
                Tables\Columns\TextColumn::make('end_at')
                    ->searchable()
                    ->sortable()
                    ->dateTime('Y-m-d H:i')
                    ->label(__('event.end_at_label')),
                Tables\Columns\TextColumn::make('eventTypes.name')
                    ->label(__('event.type'))
                    ->searchable()
                    ->badge()
                    ->sortable()
                    ->alignEnd(),
                Tables\Columns\TextColumn::make('creator.name')
                    ->label(__('event.creator_label'))
                    ->searchable()
                    ->sortable()
                    ->alignEnd(),
            ])
            ->filters([
                SelectFilter::make('eventTypes')
                    ->relationship('eventTypes', 'name')
                    ->searchable()
                    ->preload(),
                Filter::make('created_at')
                    ->form([
                        DatePicker::make('start_at'),
                        DatePicker::make('end_at'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['start_at'],
                                fn (Builder $query, $date): Builder => $query->whereDate('start_at', '>=', $date),
                            )
                            ->when(
                                $data['end_at'],
                                fn (Builder $query, $date): Builder => $query->whereDate('end_at', '<=', $date),
                            );
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('start_at', 'asc')
            ->persistSortInSession();
    }


    public static function getRelations(): array
    {
        return [
            EventTypesRelationManager::class,
        ];
    }

    #[\Override]
    public static function getWidgets(): array
    {
        return [
            Applications\Resources\EventResource\Widgets\EventOverview::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('event.label');
    }

    public static function getPluralModelLabel(): string
    {
        return __('event.plural_label');
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name'];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
}
