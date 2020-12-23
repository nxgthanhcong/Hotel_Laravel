<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HoaDon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HoaDon', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->Increments('MaHD')->unsigned();
            $table->integer('MaKHf')->unsigned()->nullable();
            $table->integer('MaDVf')->unsigned()->nullable();
            $table->integer('MaThuef')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('MaKHf')->references('MaKH')->on('KhachHang');
            $table->foreign('MaDVf')->references('MaDV')->on('DichVu');
            $table->foreign('MaThuef')->references('MaThue')->on('Thue');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('HoaDon');
    }
}
