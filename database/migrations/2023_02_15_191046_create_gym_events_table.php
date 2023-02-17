<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGymEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gym_events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gym_id')->constrained('mygyms')->nullable();
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('short_desc')->nullable();
            $table->string('description')->nullable();
            $table->string('venue')->nullable();
            $table->date('start_date')->format('Y-m-d');
            $table->date('end_date')->format('Y-m-d');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gym_events');
    }
}
