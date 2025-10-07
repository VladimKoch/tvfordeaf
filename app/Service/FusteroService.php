<?php

declare(strict_types=1);

namespace App\Service;

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

class FusteroService
{

    /**
     * Stáhne obrázek z webu a uloží ho do složky.
     *
     * @param string $url      URL obrázku ke stažení
     * @param string $savePath Cesta, kam se má obrázek uložit
     * @param Crawler          Classa pro čtení z webu.
     * @return string|null     String pokud úspěšně a není v adresáři, jinak false
     */
    public function fetchPage(): string|false
    {   
            // Hledání v html kontentu
                $html = file_get_contents('https://www.fustero.es/index_cz.php#lecciones');
           
            // Crawler
                $crawler = new Crawler($html);

            // Základní cesta
                $baseUrl = 'https://www.fustero.es/';

                $results=[];
                
            // Vyhledání img src
                $src = $crawler
                    ->filter('div.w3-col.w3-mobile.l2.m2.s12.w3-center img')
                    ->first()
                    ->attr('src');

                // $src = '2024t1cz.jpg';

            // Kontrola a Propojení adresy obrázku
                if($src){
                    //celá adresa pro stažení obrázku
                    $img = $baseUrl . $src;
                
                    //adresa pro uložení obrázku
                    // $file ='C:\xampp\htdocs\tvfordeaf\www\uploads\img\\'.$src;


                        // adressa pro produkci
                        $root_dir = $_SERVER['DOCUMENT_ROOT'];

                        // /data/web/virtuals/380391/virtual/www

                        // echo $root_dir;
                        // die;

                        // Sestaví cestu k adresáři pro nahrávání
                        // Použijte '/' jako oddělovač adresářů, je to kompatibilní s Windows i Unix/Linux.
                        $upload_dir = $root_dir . '/uploads/img/'; 

                        // Zabráníme dvojitému lomítku, pokud DOCUMENT_ROOT končí lomítkem.
                        $upload_dir = rtrim($root_dir, '/\\') . '/uploads/img/'; 

                        // Váš kód pro cestu k souboru by pak vypadal takto:
                        $file = $upload_dir . $src;

                        // echo $file;
                        // die;

                  
                        //Kontrola zda li obrázek již je stažen
                        if(!file_exists($file))
                        {   
                            // echo 'stahuji obrázek';
                            // die;
                            //stžení obrázku
                            $imageData = @file_get_contents($img);

                           
                                //kontrola stažení
                                if ($imageData === false) {
                                        throw new \Exception("Obrázek se nepodařilo stáhnout.");
                                    }
                                // Uložení na disk
                                file_put_contents($file, $imageData);

                                // pokud soubor jpg neexistuje stáhne a uloží do složky a odešle string do databáze
                                return $src;
                        }
                // Pokud již je soubor s názvem jpg obrázku je uložen v adresaři nepošle string do databáze  
                return false;
            }
        return false;
    }
}
