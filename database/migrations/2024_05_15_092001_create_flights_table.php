<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('flight_number');
            $table->unsignedBigInteger('departure_airport_id');
            $table->unsignedBigInteger('arrival_airport_id');
            $table->unsignedBigInteger('id_airline');
            $table->date('departure_date')->nullable();
            $table->decimal('price', 8, 2);
            $table->datetime('departure_time');
            $table->datetime('arrival_time');
            $table->timestamps();

            // Ajoutez une clé étrangère pour le vol de départ
            $table->foreign('departure_airport_id')->references('id')->on('airports')->onDelete('cascade');

            // Ajoutez une clé étrangère pour le vol d'arrivée
            $table->foreign('arrival_airport_id')->references('id')->on('airports')->onDelete('cascade');

            // Ajoutez une clé étrangère pour la compagnie aérienne
            $table->foreign('id_airline')->references('id')->on('airlines')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
}
