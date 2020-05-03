<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExcursionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('excursion', function (Blueprint $table) {
            $table->bigIncrements('idExcursion');
            $table->string('name', 100);
            $table->text('sub');
            $table->text('descripcion');
            $table->unsignedBigInteger('valor');
            $table->string('imagen');
            $table->unsignedBigInteger('categoria_id')->nullable();
            $table->timestamps();

            $table->foreign('categoria_id')->references('idCategoria')->on('categoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('excursion');
    }
}
