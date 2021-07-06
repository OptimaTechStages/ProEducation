<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleves', function (Blueprint $table) {
            $table->increments('id_eleve');
            $table->string('img');
            $table->string('nom');
            $table->string('prenom');
            $table->string('sexe');
            $table->string('adresse');
            $table->date('date_naissance');
            $table->string('lieu_naissance');
            $table->string('Nationalite');
            $table->string('email');
            $table->integer('phone1');
            $table->integer('phone2');
            $table->string('ancienne_ecole');
            $table->string('etudes');
            $table->string('parcours_scolaire');
            $table->string('filiere');
            $table->string('specialite');
            $table->integer('niveau');
            $table->integer('classe');
            $table->integer('sous_groupe');
            $table->integer('id_pere');
            $table->integer('id_mere');
            $table->string('mdp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eleves');
    }
}
