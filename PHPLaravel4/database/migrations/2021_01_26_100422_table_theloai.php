<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableTheloai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theloai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten');
            $table->string('tenkhongdau');
            $table->timestamps();
        });
//        Schema::create('theloai',function (Blueprint $table){
//            $table->increments('id');
//            $table->string('ten',200)->nullable;
//            $table->string('nxs')->default('Nha san xuat');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('theloai');
    }
}
