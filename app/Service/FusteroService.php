<?php

declare(strict_types=1);

namespace App\Service;

use Symfony\Component\DomCrawler\Crawler;

class FusteroService
{
    /**
     * Stáhne obrázek z webu a uloží ho do složky.
     *
     * @return string|false Název souboru pokud se nově stáhl, jinak false (chyba nebo již existuje)
     */
    public function fetchPage(): string|false
    {   
        // 1. Získání HTML obsahu (přidán zavináč pro potlačení chyby, pokud web zrovna nefunguje)
        $html = @file_get_contents('https://www.fustero.es/index_cz.php#lecciones');
        
        if ($html === false) {
            return false; // Nelze se připojit na Fustero
        }

        // 2. Crawler
        $crawler = new Crawler($html);

        // Základní cesta
        $baseUrl = 'https://www.fustero.es/';

        // 3. Vyhledání img src
        $imageNode = $crawler->filter('div.w3-col.w3-mobile.l2.m2.s12.w3-center img')->first();
        
        // Kontrola, zda byl obrázek podle selektoru vůbec nalezen
        if ($imageNode->count() === 0) {
            return false; 
        }

        $src = $imageNode->attr('src');

        // 4. Zpracování a stažení obrázku
        if ($src) {
            // Celá adresa pro stažení obrázku
            $img = $baseUrl . $src;
            
            // Sestavení absolutní cesty k adresáři pro nahrávání v Nette
            // __DIR__ ukazuje do app/Service, takže jdeme o dvě složky výš do www/
            $upload_dir = __DIR__ . '/../../www/uploads/img/'; 

            // Bezpečnostní pojistka: Pokud složka uploads/img neexistuje, vytvoří se
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }

            // Finální cesta pro uložení obrázku
            $file = $upload_dir . $src;

            // 5. Kontrola, zda soubor JEŠTĚ NEEXISTUJE (!file_exists)
            if (!file_exists($file)) {   
                
                // Stažení obrázku z webu
                $imageData = @file_get_contents($img);

                // Kontrola úspěšnosti stažení
                if ($imageData === false) {
                    throw new \Exception("Obrázek se nepodařilo stáhnout z adresy: " . $img);
                }
                
                // Uložení fyzického souboru na disk
                file_put_contents($file, $imageData);

                // Pokud je soubor nový a uložil se, pošleme string do databáze
                return $src;
            }
            
            // Pokud soubor (jpg/png) již v adresáři je, vrátí false (nepošle do databáze)
            return false;
        }
        
        return false;
    }
}