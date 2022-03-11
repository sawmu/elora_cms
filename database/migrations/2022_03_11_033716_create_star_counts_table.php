<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStarCountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('star_counts', function (Blueprint $table) {
            $table->id();
            $table->string('icon1');
            $table->string('number1');
            $table->string('text1');

            $table->string('icon2');
            $table->string('number2');
            $table->string('text2');

            $table->string('icon3');
            $table->string('number3');
            $table->string('text3');
            
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
        Schema::dropIfExists('star_counts');
    }
}
