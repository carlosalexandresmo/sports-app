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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('position');
            $table->string('height');
            $table->string('weight');
            $table->string('jersey_number');
            $table->string('college');
            $table->string('country');
            $table->integer('draft_year');
            $table->integer('draft_round');
            $table->integer('draft_number');
            //team
            $table->bigInteger('team_id')->unsigned();
            $table->foreign('team_id')->references('id')->on('team')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
