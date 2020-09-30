<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameProductColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product', function (Blueprint $table) {
            $table->renameColumn('productnaam', 'productname');
            $table->renameColumn('omschrijving', 'description');
            $table->renameColumn('afbeelding', 'image');
            $table->renameColumn('prijs', 'price');
            $table->renameColumn('merk', 'brand');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
