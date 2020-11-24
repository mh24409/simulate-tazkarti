<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaduimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staduims', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->integer('noOfChairs');
            $table->integer('noOffirstRight');
            $table->integer('noOfSecondRight');
            $table->integer('noOfThirdRight');
            $table->integer('noOffirstLeft');
            $table->integer('noOfsecondLeft');
            $table->integer('noOfthirdLeft');
            $table->integer('vip');
            $table->integer('vvip');
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
        Schema::dropIfExists('staduim');
    }
}
