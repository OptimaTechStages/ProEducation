<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id_teacher');
            $table->string('img');
            $table->string('nom_teacher');
            $table->string('prenom_teacher');
            $table->integer('date_naissance');
            $table->string('lieu_naissance');
            $table->string('sexe');
            $table->string('email_teacher');
            $table->string('nationalite');
            $table->integer('CNSS');
            $table->integer('CIN');
            $table->integer('CIMR');
            $table->float('salaire_brut');
            $table->float('salaire_net');
            $table->string('situation_familiale');
            $table->integer('nombre_enfants');
            $table->string('mutuelle');

        });
    }
 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
