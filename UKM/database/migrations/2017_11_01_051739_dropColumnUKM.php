<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropColumnUKM extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ukm', function (Blueprint $table) {
            $table->dropColumn('telphone');
            $table->integer('establish')->default(0);
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
          $table->dropColumn('establish');
          $table->integer('telphone')->default(0);
        });
    }
}
