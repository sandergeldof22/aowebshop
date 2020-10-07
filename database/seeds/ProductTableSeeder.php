<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
        	[
            	'created_at' => date('Y-m-d H:m:s'),
            	'updated_at' => date('Y-m-d H:m:s'),
           	 	'productname' => 'Van Nelle',
            	'categorie_id' => '1',
            	'description' => 'Elke shagroker kent de naam ‘Van Nelle tabak’. Dit merk is opgericht in 1782 door Johannes van Nelle. Nu, 235 jaar later, is er een hoop veranderd sinds de oprichting, maar de Van Nelle shag wordt nog steeds in iedere tabakszaak verkocht.',
            	'image' => 'Van-Nelle-Sjek.png',
            	'price' => '13.95',
            	'brand' => 'Van-Nelle'
        	], [
            	'created_at' => date('Y-m-d H:m:s'),
            	'updated_at' => date('Y-m-d H:m:s'),
            	'productname' => 'Drum',
            	'categorie_id' => '1',
            	'description' => "Drum is een van de meest verkochte soorten shag in Nederland. De tabak is te verkrijgen in verschillende soorten, variërend van lichte tot zware shag.",
            	'image' => 'Drum-Sjek.jpg',
            	'price' => '13.95',
            	'brand' => 'Drum'
        	], [
            	'created_at' => date('Y-m-d H:m:s'),
            	'updated_at' => date('Y-m-d H:m:s'),
            	'productname' => 'Javaanse Jongens',
            	'categorie_id' => '1',
            	'description' => 'Javaanse Jongens is sinds 1999 onderdeel van de Nederlandse tak van het wereldwijde concern British American Tobacco. De Sjek is een Drie-kwart sjek.',
            	'image' => 'Javaanse-Jongens-Sjek.jpg',
            	'price' => '11.50',
            	'brand' => 'Javaanse Jongens'
        	], [
            	'created_at' => date('Y-m-d H:m:s'),
            	'updated_at' => date('Y-m-d H:m:s'),
            	'productname' => 'Arturo Fuente',
            	'categorie_id' => '2',
            	'description' => 'het bedrijf is gestart door Arturo Fuente in West Tampa, Florida. In 2010 maakte het bedrijf 30 miljoen sigaren in hun fabriek in de Dominicaanse Republiek. Alle sigaren worden met de hand gemaakt.',
            	'image' => 'Arturo-Fuente-Cigars.png',
            	'price' => '23.00',
            	'brand' => 'Arturo Fuente'  
        	], [
            	'created_at' => date('Y-m-d H:m:s'),
            	'updated_at' => date('Y-m-d H:m:s'),
            	'productname' => 'El Rey del Mundo',
            	'categorie_id' => '2',
            	'description' => 'omwille van hun milde kracht en aromatische rijkdom. Volledig handgedraaid !',
            	'image' => 'El-Rey-del-Mundo.png',
            	'price' => '17.00',
            	'brand' => 'El Rey del Mundo'
            ],[
            	'created_at' => date('Y-m-d H:m:s'),
            	'updated_at' => date('Y-m-d H:m:s'),
            	'productname' => 'Macanudo',
            	'categorie_id' => '2',
            	'description' => 'In 1971 werd de zelfstandige merknaam Macanudo geintroduceerd en onder invloed van de Cubaanse Cigar Master van Partagas Ramon Cifuentes ontwikkelde Macanudo zich tot een groots longfillermerk.',
            	'image' => 'Macanudo-Cigars.jpg',
            	'price' => '21.00',
            	'brand' => 'Macanudo' 
            ],[
            	'created_at' => date('Y-m-d H:m:s'),
            	'updated_at' => date('Y-m-d H:m:s'),
            	'productname' => 'L&M',
            	'categorie_id' => '3',
            	'description' => 'L&M is een sigarettenmerk met haar oorsprong in de verenigde staten ook al is het merk meer geliefd in Zuid-Amerika en Europa.',
            	'image' => 'L&M-Sigaretten.jpg',
            	'price' => '11.00',
            	'brand' => 'L&M'  
            ],[
            	'created_at' => date('Y-m-d H:m:s'),
            	'updated_at' => date('Y-m-d H:m:s'),
            	'productname' => 'Lucky-Strikes',
            	'categorie_id' => '3',
            	'description' => 'Lucky Strikes vind haar oorsprong tijdens de gouden tijd waarop met veel goud vond. Om de brand te promoten verkochten ze deze onder \'lucky\' omdat veel goudzoekers hun merk rookten.',
            	'image' => 'Lucky-Strikes-Sigaretten.jpg',
            	'price' => '11.50',
            	'brand' => 'Lucky-Strikes' 
            ],[
            	'created_at' => date('Y-m-d H:m:s'),
            	'updated_at' => date('Y-m-d H:m:s'),
            	'productname' => 'Pall Mall',
            	'categorie_id' => '3',
            	'description' => 'Pall Mall is origineel gedesigned om aantrekkelijk te zijn voor de opperklasse mensen. en werd gezien als een \'premium\' sigaret',
            	'image' => 'Pall-Mall-Sigaretten.jpg',
            	'price' => '13.00',
            	'brand' => 'Pall Mall'
            ],[
            	'created_at' => date('Y-m-d H:m:s'),
            	'updated_at' => date('Y-m-d H:m:s'),
            	'productname' => 'Fox',
            	'categorie_id' => '4',
            	'description' => 'White Fox Slim heeft een koele en ijzige groene muntsmaak. White Fox bevat een nicotine-extract dat is gewonnen uit de tabaksplant. Het product bevat geen tabaksplantmateriaal (zoals blad of wortel) in welke vorm dan ook.',
            	'image' => 'Fox-Snus.jpg',
            	'price' => '15.00',
            	'brand' => 'Fox'
            ],[
            	'created_at' => date('Y-m-d H:m:s'),
            	'updated_at' => date('Y-m-d H:m:s'),
            	'productname' => 'Killa',
            	'categorie_id' => '4',
            	'description' => 'Met Killa Cold Mint kun je een sterke kick van nicotine verwachten. De frisse smaak van munt met een klein vleugje menthol. Een ultrasterke All White snus.',
            	'image' => 'Killa-Snus.jpg',
            	'price' => '17.50',
            	'brand' => 'Killa'
            ],[
            	'created_at' => date('Y-m-d H:m:s'),
            	'updated_at' => date('Y-m-d H:m:s'),
            	'productname' => 'Pablo',
            	'categorie_id' => '4',
            	'description' => 'Pablo Ice Cold is een \'gevaarlijk\' sterke variant en alleen geschikt voor de echte zware jongens. Voor dit merk moet je echt lef hebben. Proberen is dan ook geheel op eigen risico.',
            	'image' => 'Pablo-Snus.jpg',
            	'price' => '15.00',
            	'brand' => 'Pablo'
            ],[
            	'created_at' => date('Y-m-d H:m:s'),
            	'updated_at' => date('Y-m-d H:m:s'),
            	'productname' => 'Mac Baren',
            	'categorie_id' => '5',
            	'description' => 'De Mixture van Mac Baren is één van s-Werelds leidende blends, zoals het moet zijn. Sinds het begin in 1958 staat de Mixture van Mac Baren synoniem met rookgenot.',
            	'image' => 'Mac-Baren-Pijptabak.jpg',
            	'price' => '14.75',
            	'brand' => 'Mac Baren' 
            ],[
            	'created_at' => date('Y-m-d H:m:s'),
            	'updated_at' => date('Y-m-d H:m:s'),
            	'productname' => 'Sail',
            	'categorie_id' => '5',
            	'description' => 'Sail Classic Pijptabak Een compositie van rijpe Virginia uit drie continenten. Een deel van de Virginia wordt onder hitte geperst en vermengd met loose cut Virginia. Een smaak met een plezierige noot van klassieke tabak.',
            	'image' => 'Sail-Pijptabak.jpg',
            	'price' => '16.50',
            	'brand' => 'Sail'
            ],[
            	'created_at' => date('Y-m-d H:m:s'),
            	'updated_at' => date('Y-m-d H:m:s'),
            	'productname' => 'Troost',
            	'categorie_id' => '5',
            	'description' => 'Virginia en Burley met een vleugje Kentucky. Geperst, gerijpt, gesneden en gewreven, voordat een topsmaak wordt toegevoegd om de cacaonoot van de geroosterde Burley te accentueren.',
            	'image' => 'Troost-Pijptabak.jpg',
            	'price' => '34.00',
            	'brand' => 'Troost'
            ]                                                              		
        ]);
    }
}
