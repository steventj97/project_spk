<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNormalisasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('normalisasis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tempat_parkiran_normalisasi');
            $table->integer('biaya_parkiran_normalisasi');
            $table->integer('kondisi_cuaca_normalisasi');
            $table->integer('luas_tempat_parkir_normalisasi');
            $table->integer('jarak_dari_kampus_normalisasi');
            $table->integer('waktu_parkir_normalisasi');
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
        Schema::dropIfExists('normalisasis');
    }
}
