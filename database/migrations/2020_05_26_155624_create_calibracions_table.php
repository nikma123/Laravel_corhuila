<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalibracionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calibracions', function (Blueprint $table) {
            $table->id();
            $table->String('descripcion');
            $table->integer('tiempo');
            $table->integer('costo');
            $table->integer('numero');
            $table->integer('serial');
            $table->date('fechaIngreso');
            $table->date('fechaSalida');
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
        Schema::dropIfExists('calibracions');
    }
}
