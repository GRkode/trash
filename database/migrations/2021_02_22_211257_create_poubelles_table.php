<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoubellesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poubelles', function (Blueprint $table) {
            $table->id();
            $table->string('numero')->unique();
            $table->boolean('public')->default(false);
            $table->string('latitude');
            $table->string('longitude');
            $table->foreignId('zone_id')->constrained()->onDelete('cascade');
            $table->foreignId('departement_id')->constrained()->onDelete('cascade');
            $table->foreignId('commune_id')->constrained()->onDelete('cascade');
            $table->foreignId('arrondissement_id')->constrained()->onDelete('cascade');
            $table->foreignId('quartier_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('poubelles');
    }
}
