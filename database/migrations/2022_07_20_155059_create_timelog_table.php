<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_logs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dateTime('startTime')->default(Carbon::now());
            $table->dateTime('endTime')->nullable();
            $table->integer('weekNumber')->default(Carbon::now()->weekOfYear);
            $table->integer('yearNumber')->default(Carbon::now()->year);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timelog');
    }
};
