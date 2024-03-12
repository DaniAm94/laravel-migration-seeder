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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 30);
            $table->string('starting_station', 30);
            $table->string('arrival_station', 30);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->char('train_code', 8);
            $table->tinyInteger('wagons_num');
            $table->boolean('delayed', 0);
            $table->enum('deleted', ['SI', 'NO']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
