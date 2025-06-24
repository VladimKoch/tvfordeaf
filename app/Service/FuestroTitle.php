<?php

declare(strict_types=1);

namespace App\Service;


use DOMDocument;
use DOMXPath;

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

class FusteroTitle
{
 public function getTitlesFromFustero(): array
{
    $client = new Client;
    $response = $client->get('https://www.fustero.es/index_cz.php');

    $html = (string) $response->getBody();

    // Zamezí warningům z nevalidního HTML
    libxml_use_internal_errors(true);

    $dom = new DOMDocument();
    $dom->loadHTML($html);

    $xpath = new DOMXPath($dom);

    // Získání všech odkazů v levém menu
    $nodes = $xpath->query('//td[@class="estilo1"]//a');

    $titles = [];
    foreach ($nodes as $node) {
        $text = trim($node->nodeValue);
        if (preg_match('/^\d{2}\.\s.+/', $text)) {
            $titles[] = $text;
        }
    }

    return $titles;
}
}