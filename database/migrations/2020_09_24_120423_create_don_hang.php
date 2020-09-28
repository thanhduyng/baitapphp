<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('don_hang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_hang');
            $table->integer('soluong');
            $table->double('dongia');
            $table->double('thanhtien');
            $table->timestamp('ngayban');
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
        Schema::dropIfExists('don_hang');
    }
}
