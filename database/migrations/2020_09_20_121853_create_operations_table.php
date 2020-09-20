<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('comptes_id')->unsigned();
            $table->foreign('comptes_id')->references('id')->on('comptes');
            $table->integer('typeoperations_id')->unsigned();
            $table->foreign('typeoperations_id')->references('id')->on('typeoperations');
            $table->string('dateoperation');
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
        Schema::dropIfExists('operations');
    }
}
