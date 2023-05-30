<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDossiersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossiers', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('district_id')->constrained('districts');
            $table->foreignId('installateur_id')->constrained('installateurs');
            $table->string('reference');
            $table->string('nom_client');
            $table->string('puissance');
            $table->string('type_ctr');
            $table->string('num_ctr_pose');
            $table->timestamp('date_arriv_dossier_technique')->nullable();
            $table->text('commentaire_technique')->nullable();
            $table->date('date_approbation_technique')->nullable();
            $table->date('date_arriv_dossier_commerciale')->nullable();
            $table->text('commentaire_commerciale')->nullable();
            $table->date('date_approbation_commerciale')->nullable();
            $table->date('date_reception_technique')->nullable();
            $table->text('commentaire_réception')->nullable();
            $table->date('date_mise_en_service')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dossiers');
    }
}
