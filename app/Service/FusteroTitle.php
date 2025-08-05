<?php

declare(strict_types=1);

namespace App\Service;


use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

class FusteroTitle
{
 public function getTitlesFromFustero(): array
{   

    $client = new Client();
    $response = $client->request('GET', 'https://www.fustero.es/index_cz.php');
    $html = $response->getBody()->getContents();

    $crawler = new Crawler($html);

    $sections = [];

    // Pro každou sekci (celý blok lekce)
        $crawler->filter('section.w3-container.w3-row')->each(function (Crawler $section) use (&$sections) {
        $date = null;
        $title = null;
        $documents = [];

        // Najdi hlavní div s datem a titulkem
        $psalmDiv = $section->filter('div.w3-large');
        if($psalmDiv->count()){
            $titleSpan = $psalmDiv->filter('span.w3-medium');
            if($titleSpan->count()){
                $title = trim($titleSpan->text());
            }
        }
        $infoDiv = $section->filter('div.w3-xlarge');
        if ($infoDiv->count()) {
            // Datum
            $dateSpan = $infoDiv->filter('span.w3-large');
            if ($dateSpan->count()) {
                $date = trim($dateSpan->text());
            }

            // Titulek je text uvnitř divu, bez <span> (odstraníme jeho obsah)
            $fullText = $infoDiv->text();
            $title = trim(str_replace($date, '', $fullText));
        }

        // Všechny odkazy v sekci (a[href])
        $section->filter('a')->each(function (Crawler $a) use (&$documents) {
            $href = $a->attr('href');
            if ($href) {
                // Přidej absolutní URL
                $url = 'https://www.fustero.es/' . ltrim($href, '/');
                $salmos = ltrim($href,'/');
                 // Rozpoznáme typ
        if (str_ends_with($href, '.pptx')) {
            $documents['pptx'] = $url;
        } elseif (str_ends_with($href, '.pdf')) {
            // Rozlišíme PDF podle názvu
            if (str_contains($href, 'resumen')) {
                $documents['res_pdf'] = $url;
            } elseif(str_contains($href,'Zalm')){
                
                $documents[] =  $salmos;
            } 
            else {
                $documents['pdf'] = $url;
            }
        } elseif (str_ends_with($href, '.docx')) {
            $documents['docx'] = $url;
        }else{
            $documents[] = 'https://www.fustero.es/' . ltrim($href, '/');
        }
        //  elseif(str_ends_with($href,'.jpg')){
        //     $documents['jpg']=$url;
        // }
            // $documents[] = 'https://www.fustero.es/' . ltrim($href, '/');
            }
        });

        // Uložme výsledky
        $sections[] = [
            'date' => $date,
            'title' => $title,
            'documents' =>$documents
        ];
    });
    // echo "<pre>";
    // print_r($sections);
    // echo "</pre>";
    // die;
    return $sections;
}
}