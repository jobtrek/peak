<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('event_event_type', function (Blueprint $table) {
            $table->foreignUuid('event_id')->constrained();
            $table->foreignUuid('event_type_id')->constrained();
            $table->primary(['event_id', 'event_type_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_event_type');
    }
};
