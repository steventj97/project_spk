<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParkiransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parkirans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tempat_parkiran');
            $table->integer('biaya_parkiran');
            $table->string('kondisi_cuaca');
            $table->integer('luas_tempat_parkir');
            $table->integer('jarak_dari_kampus');
            $table->string('waktu_parkir');
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
        Schema::dropIfExists('parkirans');
    }
}
