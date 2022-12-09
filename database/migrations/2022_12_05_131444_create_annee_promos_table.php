<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnneePromosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annee_promos', function (Blueprint $table) {
            $table->id();
            $table->foreignId("annees_id")->constrained();
            $table->foreignId("promotions_id")->constrained();
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
        Schema::table('annee_promos', function(Blueprint $table){
            $table->dropForeign(["annees_id","promotions_id"]);
        });
        Schema::dropIfExists('annee_promos');
    }
}
