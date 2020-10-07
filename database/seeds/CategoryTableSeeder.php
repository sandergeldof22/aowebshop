<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
        	[
        		'name' =>	'Sjek',
        		'description' => 'Sjek is fijngesneden tabak dat door middel van draaitechnieken in een vloeitje kan worden gemaakt naar een sigaret.',
        		'created_at' => date('Y-m-d H:m:s'),
        		'updated_at' => date('Y-m-d H:m:s')
        	],[
        		'name' =>	'Sigaren',
        		'description' => 'een sigaar is anders dan andere tabak. Sigaren zijn groter en je doet er veel langer over. Bovendien is de rook niet bestemd voor de longen maar om in de keel te houden voor het aroma.',
        		'created_at' => date('Y-m-d H:m:s'),
        		'updated_at' => date('Y-m-d H:m:s')
        	],[
        		'name' =>	'Sigaret',
        		'description' => 'Een sigaret is niks meer dan een rolletje tabak uit de fabriek. meestal met een filter en komen in allerlei soorten en maten. het is het meest voorkomende tabakssoort.',
        		'created_at' => date('Y-m-d H:m:s'),
        		'updated_at' => date('Y-m-d H:m:s')
        	],[
        		'name' =>	'Snus',
        		'description' => 'Snus is tabak in poedervorm. het wordt gemalen tot een soort klei dat onder de lippen wordt gestopt. Het wordt vooral gebruikt in Scandinavië.',
        		'created_at' => date('Y-m-d H:m:s'),
        		'updated_at' => date('Y-m-d H:m:s')
        	],[
        		'name' =>	'Pijptabak',
        		'description' => 'Pijptabak wordt gerookt in een pijp. De tabak zelf is grover en er is meestal extra smaakstoffen aan toegevoegd voor het aroma.',
        		'created_at' => date('Y-m-d H:m:s'),
        		'updated_at' => date('Y-m-d H:m:s')
        	]
        ]);
    }
}
