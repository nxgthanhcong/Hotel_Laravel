<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DichVu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DichVu', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->Increments('MaDV')->unsigned();
            $table->string('TenDV');
            $table->string('MoTaDV');
            $table->string('GiaDV');
            $table->string('NoiDungDV');
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
        Schema::dropIfExists('DichVu');
    }
}
