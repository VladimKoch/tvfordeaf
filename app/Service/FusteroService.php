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
                    $file ='C:\xampp\htdocs\tvfordeaf\www\uploads\img\\'.$src;
                  
                        //Kontrola zda li obrázek již je stažen
                        if(!file_exists($file))
                        {   
                            //stžení obrázku
                            $imageData = @file_get_contents($img);
                           
                                //kontrola stžení
                                if ($imageData === false) {
                                        throw new \Exception("Obrázek se nepodařilo stáhnout.");
                                    }
                                // Uložení na disk
                                file_put_contents($file, $imageData);

                                // pokud soubor jpg neexistuje stáhne a uloží do složky a odešle string pro databázy
                                return $src;
                        }
                // Pokud již je soubor s názvem jpg obrázku je uložen v adresaři nepošle string do databáze  
                return false;
            }
        return false;
    }
}
