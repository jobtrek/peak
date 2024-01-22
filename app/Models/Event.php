<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        'name',
        'start_at',
        'end_at',
        'creator_id',
    ];

    protected $casts = [
        'start_at' => 'datetime',
        'end_at' => 'datetime',
    ];

    protected function startAtForHumans(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->start_at->diffForHumans(),
        );
    }

    public function eventTypes(): BelongsToMany
    {
        return $this->belongsToMany(
            EventType::class,
            'event_event_type',
            'event_id',
            'event_type_id'
        );
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(
            User::class,
            'creator_id',
            'id'
        );
    }
}
