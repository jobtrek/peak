<?php

namespace App\Filament\Clusters\Applications\Resources\EventTypeResource\RelationManagers;

use Filament\Forms\Components\DatePicker;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class EventsRelationManager extends RelationManager
{
    protected static string $relationship = 'events';

    protected static ?string $title = 'Événements de ce type';

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
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
            ->headerActions([
                Tables\Actions\AttachAction::make(),
            ])
            ->actions([
                Tables\Actions\DetachAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DetachBulkAction::make(),
                ]),
            ]);
    }
}
