<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpozilasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upozilas', function (Blueprint $table) {

            $table->increments('id');
            $table->string('upozila_name')->nullable();
            $table->integer('divisions_id')->unsigned();
            $table->integer('districts_id')->unsigned();
            $table->timestamps();

            $table->foreign('divisions_id')->references('id')->on('divisions');
            $table->foreign('districts_id')->references('id')->on('districts');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('upozilas');
    }
}
