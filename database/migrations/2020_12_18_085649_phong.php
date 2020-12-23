<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Phong extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Phong', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->Increments('MaPhong')->unsigned();
            $table->string('TenPhong');
            $table->integer('LoaiPhong')->unsigned()->nullable();
            $table->string('GiaPhong');
            $table->timestamps();
            $table->foreign('LoaiPhong')->references('MaLoai')->on('LoaiPhong');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Phong');
    }
}
