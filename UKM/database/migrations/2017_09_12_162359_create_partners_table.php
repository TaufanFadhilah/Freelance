<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ukm_id')->unsigned();
            $table->integer('suplayer_increment')->default(1);
            $table->integer('suplayer_availability')->default(1);
            $table->integer('suplayer_min_order')->default(0);
            $table->integer('suplayer_access')->default(1);

            $table->integer('distributor_frequency')->default(0);
            $table->integer('distributor_send_cost')->default(0);
            $table->string('distributor_area')->default('-');
            $table->integer('distributor_complaint')->default(1);
            $table->integer('distributor_accuracy')->default(1);
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
        Schema::dropIfExists('partners');
    }
}
