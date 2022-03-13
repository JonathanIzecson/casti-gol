<?php

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
        Schema::create('matches', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->integer('home_team_id')->nullable(false);
            $table->integer('away_team_id')->nullable(false);
            $table->timestamp('date')->nullable(false);
            $table->bigInteger('match_status_id');
            $table->integer('journey_id')->nullable(false);
            $table->integer('winner_team')->nullable();
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
        Schema::dropIfExists('matches');
    }
};
