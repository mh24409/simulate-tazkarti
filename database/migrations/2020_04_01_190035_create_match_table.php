<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('openTime');
            $table->time('closeTime');
            $table->string('groupstage');
            $table->string('homeTeam');
            $table->string('awayTeam');
            $table->integer('noOfFanse');
            $table->time('time');
            $table->integer('noOffirstRight');
            $table->integer('noOfSecondRight');
            $table->integer('noOfThirdRight');
            $table->integer('noOffirstLeft');
            $table->integer('noOfsecondLeft');
            $table->integer('noOfthirdLeft');
            $table->integer('vip');
            $table->integer('vvip');
            $table->integer('staduimId')->unsigned();
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
        Schema::dropIfExists('match');
    }
}
