<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();

            $table->string('slider1');
            $table->string('slider2');
            $table->string('slider3');
            $table->string('slider4');
            $table->string('slider5');

            $table->longText('review1');
            $table->longText('review2');
            $table->longText('review3');

            $table->string('rgive1');
            $table->string('rgive2');
            $table->string('rgive3');

            $table->string('o1image');
            $table->string('o2image');

            $table->string('o1title');
            $table->string('o2title');

            $table->string('o1duration');
            $table->string('o2duration');

            $table->string('o1d1')->nullable();
            $table->string('o1d2')->nullable();
            $table->string('o1d3')->nullable();
            $table->string('o1d4')->nullable();
            $table->string('o1d5')->nullable();

            $table->string('o2d1')->nullable();
            $table->string('o2d2')->nullable();
            $table->string('o2d3')->nullable();
            $table->string('o2d4')->nullable();
            $table->string('o2d5')->nullable();

            $table->string('o1p1')->nullable();
            $table->string('o1p2')->nullable();
            $table->string('o1p3')->nullable();
            $table->string('o1p4')->nullable();
            $table->string('o1p5')->nullable();

            $table->string('o2p1')->nullable();
            $table->string('o2p2')->nullable();
            $table->string('o2p3')->nullable();
            $table->string('o2p4')->nullable();
            $table->string('o2p5')->nullable();

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
        Schema::dropIfExists('contents');
    }
}
