<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TournamentUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournament_user', function (Blueprint $table) {
            $type = DB::connection()->getDoctrineColumn(DB::getTablePrefix().'users', 'id')->getType()->getName();
            if ($type == 'bigint') {
                $table->bigInteger('user_id')->unsigned()->index();
            } else {
                $table->integer('user_id')->unsigned()->index();
            }

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('tournament_id')->unsigned()->index();
            $table->foreign('tournament_id')->references('id')->on('tournaments')->onDelete('cascade');
            $table->primary(['user_id', 'tournament_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tournament_user');
    }
}
