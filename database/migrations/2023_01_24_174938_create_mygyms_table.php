<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMygymsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mygyms', function (Blueprint $table) {
            $table->id();
            $table->string('gym_name');
            $table->foreignId('gym_owner_id')->constrained('users')->nullable();
            $table->longText('address');
            $table->string('city',50)->nullable();
            $table->string('region',60)->nullable();
            $table->string('country',30)->nullable();
            $table->string('postal_code',15)->nullable();
            $table->string('phone',20)->nullable();
            $table->string('email',50)->unique();
            $table->string('pan')->nullable();
            $table->string('cin')->nullable();
            $table->string('taxid',30)->nullable();
            $table->integer('tax')->unsigned()->nullable();
            $table->string('zone',25);
            $table->text('logo',30)->nullable();
            $table->string('password');
            $table->Integer('verified')->unsigned()->default('0');
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('mygyms');
    }
}
