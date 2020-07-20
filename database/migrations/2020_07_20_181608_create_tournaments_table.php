<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTournamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id();
            $table->string('t_name');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->enum('t_type', ['FREE', 'KILLS', 'PRIZE'])->default('KILLS');
            $table->enum('t_mode_type', ['SOLO', 'DUO', 'SQUAD'])->default('SOLO');
            $table->enum('t_map', ['erangel', 'miramar', 'sanhok','vikendi','warehouse'])->default('erangel');
            $table->integer('t_price');
            $table->integer('t_payment');
            $table->integer('t_points_for_kill');
            $table->string('t_organizer')->nullable();
            $table->timestamp('t_start_date');
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
        Schema::dropIfExists('tournaments');
    }
}
