<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('product')->insert(array(
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
            'productnaam' => 'Van Nelle',
            'categorie_id' => '1',
            'omschrijving' => 'Elke shagroker kent de naam ‘Van Nelle tabak’. Dit merk is opgericht in 1782 door Johannes van Nelle. Nu, 235 jaar later, is er een hoop veranderd sinds de oprichting, maar de Van Nelle shag wordt nog steeds in iedere tabakszaak verkocht.',
            'afbeelding' => 'Van-Nelle-Sjek.png',
            'prijs' => '13.95',
            'merk' => 'Van-Nelle'
        ));

        DB::table('product')->insert(array(
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
            'productnaam' => 'Drum',
            'categorie_id' => '1',
            'omschrijving' => "Drum is een van de meest verkochte soorten shag in Nederland. De tabak is te verkrijgen in verschillende soorten, variërend van lichte tot zware shag.",
            'afbeelding' => 'Drum-Sjek.jpg',
            'prijs' => '13.95',
            'merk' => 'Drum'
        ));

        DB::table('product')->insert(array(
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
            'productnaam' => 'Javaanse Jongens',
            'categorie_id' => '1',
            'omschrijving' => 'Javaanse Jongens is sinds 1999 onderdeel van de Nederlandse tak van het wereldwijde concern British American Tobacco. De Sjek is een Drie-kwart sjek.',
            'afbeelding' => 'Javaanse-Jongens-Sjek.jpg',
            'prijs' => '11.50',
            'merk' => 'Javaanse Jongens'
        ));

        DB::table('product')->insert(array(
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
            'productnaam' => 'Arturo Fuente',
            'categorie_id' => '2',
            'omschrijving' => 'het bedrijf is gestart door Arturo Fuente in West Tampa, Florida. In 2010 maakte het bedrijf 30 miljoen sigaren in hun fabriek in de Dominicaanse Republiek. Alle sigaren worden met de hand gemaakt.',
            'afbeelding' => 'Arturo-Fuente-Cigars.png',
            'prijs' => '23.00',
            'merk' => 'Arturo Fuente'
        ));

        DB::table('product')->insert(array(
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
            'productnaam' => 'El Rey del Mundo',
            'categorie_id' => '2',
            'omschrijving' => 'omwille van hun milde kracht en aromatische rijkdom. Volledig handgedraaid !',
            'afbeelding' => 'El-Rey-del-Mundo.png',
            'prijs' => '17.00',
            'merk' => 'El Rey del Mundo'
        ));

        DB::table('product')->insert(array(
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
            'productnaam' => 'Macanudo',
            'categorie_id' => '2',
            'omschrijving' => 'In 1971 werd de zelfstandige merknaam Macanudo geintroduceerd en onder invloed van de Cubaanse Cigar Master van Partagas Ramon Cifuentes ontwikkelde Macanudo zich tot een groots longfillermerk.',
            'afbeelding' => 'Macanudo-Cigars.jpg',
            'prijs' => '21.00',
            'merk' => 'Macanudo'
        ));

        DB::table('product')->insert(array(
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
            'productnaam' => 'L&M',
            'categorie_id' => '3',
            'omschrijving' => 'L&M is een sigarettenmerk met haar oorsprong in de verenigde staten ook al is het merk meer geliefd in Zuid-Amerika en Europa.',
            'afbeelding' => 'L&M-Sigaretten.jpg',
            'prijs' => '11.00',
            'merk' => 'L&M'
        ));

        DB::table('product')->insert(array(
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
            'productnaam' => 'Lucky-Strikes',
            'categorie_id' => '3',
            'omschrijving' => 'Lucky Strikes vind haar oorsprong tijdens de gouden tijd waarop met veel goud vond. Om de brand te promoten verkochten ze deze onder \'lucky\' omdat veel goudzoekers hun merk rookten.',
            'afbeelding' => 'Lucky-Strikes-Sigaretten.jpg',
            'prijs' => '11.50',
            'merk' => 'Lucky-Strikes'
        ));

        DB::table('product')->insert(array(
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
            'productnaam' => 'Pall Mall',
            'categorie_id' => '3',
            'omschrijving' => 'Pall Mall is origineel gedesigned om aantrekkelijk te zijn voor de opperklasse mensen. en werd gezien als een \'premium\' sigaret',
            'afbeelding' => 'Pall-Mall-Sigaretten.jpg',
            'prijs' => '13.00',
            'merk' => 'Pall Mall'
        ));

        DB::table('product')->insert(array(
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
            'productnaam' => 'Fox',
            'categorie_id' => '4',
            'omschrijving' => 'White Fox Slim heeft een koele en ijzige groene muntsmaak. White Fox bevat een nicotine-extract dat is gewonnen uit de tabaksplant. Het product bevat geen tabaksplantmateriaal (zoals blad of wortel) in welke vorm dan ook.',
            'afbeelding' => 'Fox-Snus.jpg',
            'prijs' => '15.00',
            'merk' => 'Fox'
        ));

        DB::table('product')->insert(array(
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
            'productnaam' => 'Killa',
            'categorie_id' => '4',
            'omschrijving' => 'Met Killa Cold Mint kun je een sterke kick van nicotine verwachten. De frisse smaak van munt met een klein vleugje menthol. Een ultrasterke All White snus.',
            'afbeelding' => 'Killa-Snus.jpg',
            'prijs' => '17.50',
            'merk' => 'Killa'
        ));

        DB::table('product')->insert(array(
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
            'productnaam' => 'Pablo',
            'categorie_id' => '4',
            'omschrijving' => 'Pablo Ice Cold is een \'gevaarlijk\' sterke variant en alleen geschikt voor de echte zware jongens. Voor dit merk moet je echt lef hebben. Proberen is dan ook geheel op eigen risico.',
            'afbeelding' => 'Pablo-Snus.jpg',
            'prijs' => '15.00',
            'merk' => 'Pablo'
        ));

        DB::table('product')->insert(array(
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
            'productnaam' => 'Mac Baren',
            'categorie_id' => '5',
            'omschrijving' => 'De Mixture van Mac Baren is één van s-Werelds leidende blends, zoals het moet zijn. Sinds het begin in 1958 staat de Mixture van Mac Baren synoniem met rookgenot.',
            'afbeelding' => 'Mac-Baren-Pijptabak.jpg',
            'prijs' => '14.75',
            'merk' => 'Mac Baren'
        ));

        DB::table('product')->insert(array(
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
            'productnaam' => 'Sail',
            'categorie_id' => '5',
            'omschrijving' => 'Sail Classic Pijptabak Een compositie van rijpe Virginia uit drie continenten. Een deel van de Virginia wordt onder hitte geperst en vermengd met loose cut Virginia. Een smaak met een plezierige noot van klassieke tabak.',
            'afbeelding' => 'Sail-Pijptabak.jpg',
            'prijs' => '16.50',
            'merk' => 'Sail'
        ));

        DB::table('product')->insert(array(
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
            'productnaam' => 'Troost',
            'categorie_id' => '5',
            'omschrijving' => 'Virginia en Burley met een vleugje Kentucky. Geperst, gerijpt, gesneden en gewreven, voordat een topsmaak wordt toegevoegd om de cacaonoot van de geroosterde Burley te accentueren.',
            'afbeelding' => 'Troost-Pijptabak.jpg',
            'prijs' => '34.00',
            'merk' => 'Troost'
        ));
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
