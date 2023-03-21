<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaTelefonicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda_telefonicas', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50)->nullable();
            $table->string('email', 150);
            $table->integer('data_nasc');
            $table->string('cpf');
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
        Schema::dropIfExists('agenda_telefonicas');
    }
}
