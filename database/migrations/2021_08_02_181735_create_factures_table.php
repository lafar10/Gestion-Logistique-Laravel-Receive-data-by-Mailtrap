<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prenom');
            $table->string('email');
            $table->string('tel');
            $table->string('adresse');
            $table->string('poids');
            $table->string('montant_total');
            $table->string('vehicule_type');
            $table->string('lieu_ramassage');
            $table->string('lieu_depose');
            $table->date('date_ramassage');
            $table->string('heure');
            $table->string('minutes');
            $table->string('period');
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
        Schema::dropIfExists('factures');
    }
}
