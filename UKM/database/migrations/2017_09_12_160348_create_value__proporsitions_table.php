<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValueProporsitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('value_proporsitions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ukm_id')->unsigned();
            $table->integer('creativity')->default(1);
            $table->integer('quality')->default(1);
            $table->integer('design')->default(1);
            $table->foreign('ukm_id')->references('id')->on('UKM')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('value_proporsitions');
    }
}
