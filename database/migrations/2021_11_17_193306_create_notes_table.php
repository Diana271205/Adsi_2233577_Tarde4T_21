<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->integer('parcial1')->length(3);
            $table->integer('parcial2')->length(3);
            $table->integer('final')->length(3);
            $table->date('fecha');
            $table->unsignedBigInteger('id_student')->nullable();
            $table->foreign('id_student')->references('id')->on('Students')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('notes');
    }
}
