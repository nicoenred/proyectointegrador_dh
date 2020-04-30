<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarritoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrito', function (Blueprint $table) {
            $table->bigIncrements('idCompra');
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('excursion_id');
            $table->unsignedBigInteger('cantidad');
            $table->unsignedBigInteger('valor');
            $table->timestamps();

            $table->foreign('usuario_id')->references('idUser')->on('users');
            $table->foreign('excursion_id')->references('idExcursion')->on('excursion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrito');
    }
}
