<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBestellingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bestelling', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->biginCrements('id');
            $table->integer('klant_id');
            $table->string('klant_naam');
            $table->string('adress');
            $table->string('postcode');
            $table->DateTime('aanvraag_datum');
            $table->DateTime('verzendings_datum');
            $table->integer('product_id');
            $table->string('productnaam');
            $table->integer('prijs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bestelling');
    }
}
