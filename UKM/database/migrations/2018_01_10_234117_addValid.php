<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddValid extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ukm', function (Blueprint $table) {
            $table->tinyInteger('isValid')->default(0)->comment("0 = not valid, 1 = valid");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ukm', function (Blueprint $table) {
            $table->dropColumn('isValid');
        });
    }
}
