<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameCustomersColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->renameColumn('voornaam', 'first_name');
            $table->renameColumn('achternaam', 'last_name');
            $table->renameColumn('postcode', 'postal_code');
            $table->renameColumn('telefoonnummer', 'telephone_number');
            $table->renameColumn('leeftijd', 'age');
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
