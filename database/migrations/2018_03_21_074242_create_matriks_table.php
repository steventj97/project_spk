<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatriksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tempat_parkiran_matrik');
            $table->float('biaya_parkiran_matrik');
            $table->float('kondisi_cuaca_matrik');
            $table->float('luas_tempat_parkir_matrik');
            $table->float('jarak_dari_kampus_matrik');
            $table->float('waktu_parkir_matrik');
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
        Schema::dropIfExists('matriks');
    }
}
