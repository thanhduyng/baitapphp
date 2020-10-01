<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaisansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taisans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tentaisan');
            $table->double('giatien');
            $table->integer('soluong');
            $table->integer('id_nguoidung');
            $table->integer('id_nhacc');
            $table->integer('id_chungloai');
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
        Schema::dropIfExists('taisans');
    }
}
