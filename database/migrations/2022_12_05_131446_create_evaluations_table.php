<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->foreignId("cours_id")->nullable();
            $table->foreignId("annee_promo_etudiants_id")->nullable();
            $table->double('point_examen')->nullable();
            $table->double('point_annee')->nullable();
            $table->double('point_totale');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('evaluations', function(Blueprint $table){
            $table->dropForeign(["annee_promo_etudiants_id"]);
        });
        Schema::dropIfExists('evaluations');
    }
}
