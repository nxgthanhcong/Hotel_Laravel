<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Thue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Thue', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->Increments('MaThue')->unsigned();
            $table->integer('MaKHf')->unsigned()->nullable();
            $table->integer('MaPhongf')->unsigned()->nullable();
            $table->date('NgayDen');
            $table->date('NgayDi');
            $table->integer('ThanhTien');
            $table->timestamps();
            $table->foreign('MaKHf')->references('MaKH')->on('KhachHang');
            $table->foreign('MaPhongf')->references('MaPhong')->on('Phong');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Thue');
    }
}
