<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProductCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('product_categories')->insert(array(
            'product_id' => '1',
            'categories_id' => '1',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('product_categories')->insert(array(
            'product_id' => '2',
            'categories_id' => '1',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('product_categories')->insert(array(
            'product_id' => '3',
            'categories_id' => '1',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('product_categories')->insert(array(
            'product_id' => '4',
            'categories_id' => '2',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('product_categories')->insert(array(
            'product_id' => '5',
            'categories_id' => '2',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('product_categories')->insert(array(
            'product_id' => '6',
            'categories_id' => '2',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('product_categories')->insert(array(
            'product_id' => '7',
            'categories_id' => '3',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('product_categories')->insert(array(
            'product_id' => '8',
            'categories_id' => '3',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('product_categories')->insert(array(
            'product_id' => '9',
            'categories_id' => '3',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('product_categories')->insert(array(
            'product_id' => '10',
            'categories_id' => '4',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('product_categories')->insert(array(
            'product_id' => '11',
            'categories_id' => '4',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('product_categories')->insert(array(
            'product_id' => '12',
            'categories_id' => '4',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('product_categories')->insert(array(
            'product_id' => '13',
            'categories_id' => '5',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('product_categories')->insert(array(
            'product_id' => '14',
            'categories_id' => '5',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('product_categories')->insert(array(
            'product_id' => '15',
            'categories_id' => '5',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
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
