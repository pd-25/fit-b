<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGymSubeventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gym_subevents', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->foreignId('gym_event_id')->constrained('gym_events')->nullable();
            $table->string('sub_event_name');
            $table->string('sub_event_short_desc')->nullable();
            $table->longText('sub_event_description')->nullable();
            $table->integer('participant_age_limit')->unsigned();
            $table->string('prize');
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
        Schema::dropIfExists('gym_subevents');
    }
}
