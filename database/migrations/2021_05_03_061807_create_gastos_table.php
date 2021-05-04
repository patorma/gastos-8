<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGastosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gastos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('tipo_gasto_id');
            $table->unsignedBigInteger('local_id');


            $table->text('nombre',50);
            $table->integer('valor');
            $table->integer('cantidad');
            $table->date('fecha');
            $table->string('descripcion',400);

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('tipo_gasto_id')->references('id')->on('tipo_gastos');
            $table->foreign('local_id')->references('id')->on('locals');

             
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
        Schema::dropIfExists('gastos');
    }
}
