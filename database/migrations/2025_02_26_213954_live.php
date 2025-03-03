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
        Schema::create('live', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('streamer');
            $table->string('game');
            $table->string('thumbnail');
            $table->string('viewer_count');
            $table->string('started_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
