<?php

declare(strict_types=1);

namespace App\Presentation\ManaCentrum;

use Nette;


final class ManaCentrumPresenter extends Nette\Application\UI\Presenter
{   

    /** @var int počet položek na stránku */
    private const ITEMS_PER_PAGE = 12;

    public function __construct(private \App\Model\ArticleManager $article,
                                private \Nette\Http\Request $request,
                                private \Nette\Database\Explorer $database,
                                private \App\Service\FusteroService $fusteroService,
                                private \App\Service\FusteroTitle $fusteroTitle)
    {
       
    }
    /**
    *  Hlavní metoda pro zobrazení stránky ManaCentrum v default.latte
    */
    public function renderDefault()
    {   
        // Aktualizace fotky sobotní školy

        $imgString = $this->fusteroService->fetchPage();

        if(is_string($imgString)){
            $setImg = $this->database->table('manacentrum')->get(9);
            if($setImg['photo_url']!==$imgString)
            {
                $setImg->update([
                    'photo_url' => $imgString]);
            };
        }

         $this->template->posts= $this->database->table('manacentrum'); // získejte články podle volby menu
         
    }
    /**
    * Hlavní metoda pro zobrazení štránky školy v skola.latte
    */

    public function renderSkola()
    {   
        $this->template->html = $this->fusteroService->fetchPage();
    }

        
    /**
    * Metroda pro zobrazení příběhů pro děti v prodeti.latte
    */
    public function renderProdeti($page=1)
    {

          // Youtube playlist URL pro neslyšící
        $playlistUrl = 'https://www.youtube.com/playlist?list=PLGng993tSmjEqFx6w4ohGY3xJOXjtePtd';

        // spusť yt-dlp s JSON výstupem
        $jsonOutput = shell_exec('yt-dlp --flat-playlist -J ' . escapeshellarg($playlistUrl));

        //kontrola zda li se playlist načetl pokud ne zobrazí se chybová flash zpráva
        if (!$jsonOutput) {
            $this->flashMessage('Nepodařilo se načíst playlist.', 'danger');
            $this->template->pribehy = [];
            return;
        }

        // Dekoduje JSON výstup do PHP objektu
        $data = json_decode($jsonOutput);

        // Získání dat z einries
        $videos=$data->entries;
        // Iniciializace pole pro uložení ID videí
        $videoId = [];

        // Získání URL z videí pro vložení do databáze a šablony
        foreach($videos as $video){
            
            parse_str(parse_url($video->url, PHP_URL_QUERY), $query);
            $videoId[]= ['title'=>$video->title,'url'=>$query['v'] ?? null];
        }

        // Získání vídeí pouze příběhy pro děti
        foreach($videoId as $video){

            if (strpos($video['title'], 'Příběh') !== false) {
                // vložit do tabulky pribehy
                try {
                $this->database->table('prodeti')->insert([
                    'title' => $video['title'],
                    'video_url' => $video['url'],
                    'created_at' => new \DateTime(),
                ]);
                } catch (\Nette\Database\UniqueConstraintViolationException $e) {
                    // Přeskoč duplicitní řádek
                    continue;
                }
            }
        }

        $itemsPerPage = self::ITEMS_PER_PAGE; //počet článku na stránku

        $proDeti = $this->database->table('prodeti')->page($page,$itemsPerPage); // získejte články podle volby menu
        $this->template->pribehy = $proDeti; // získejte videa na stránku
        
        //-- Pagination --//

        $totalItems = $proDeti->count('*'); // celkový počet článků
        $pageCount = (int) ceil($totalItems / $itemsPerPage);

            // Ošetření neplatné stránky
        if ($page < 1) {
            $this->redirect('this', ['page' => 1]);
        } elseif ($page > $pageCount) {
            $this->redirect('this', ['page' => $pageCount]);
        }

         // Info pro šablonu
        $this->template->page = $page;
        $this->template->pageCount = $pageCount;
    }

    /**
     * Metoda pro zobrazení kázání v kazaní.latte 
     */
      public function renderVideos($page=1)
    {   

          // Youtube playlist URL pro neslyšící
        $playlistUrl = 'https://www.youtube.com/playlist?list=PLGng993tSmjEqFx6w4ohGY3xJOXjtePtd';

        // spusť yt-dlp s JSON výstupem
        $jsonOutput = shell_exec('yt-dlp --flat-playlist -J ' . escapeshellarg($playlistUrl));

        // kontrola zda li se playlist načetl pokud ne zobrazí se chybová flsah zpráva
        if (!$jsonOutput) {
            $this->flashMessage('Nepodařilo se načíst playlist.', 'danger');
            $this->template->pribehy = [];
            return;
        }

        // Dekoduje JSON výstup do PHP objektu
        $data = json_decode($jsonOutput);

        // Získání dat z netries
        $videos=$data->entries;
        // inicializace pole pr uloení ID videí
        $videoId = [];

        // Získání URL z videí pro vložení do databáze a šablony
        foreach($videos as $video){
            
            parse_str(parse_url($video->url, PHP_URL_QUERY), $query);
            $videoId[]= ['title'=>$video->title,'url'=>$query['v'] ?? null];
        }
    
        // Získání videí pouze kázání
        foreach($videoId as $video){

            if (strpos($video['title'], 'Kázání') !== false) {
                // vložit do tabulky pribehy
                try {
                $this->database->table('videos')->insert([
                    'title' => $video['title'],
                    'video_url' => $video['url'],
                    'created_at' => new \DateTime(),
                ]);
                } catch (\Nette\Database\UniqueConstraintViolationException $e) {
                    // Přeskoč duplicitní řádek
                    continue;
                }
            } 
        }

        $itemsPerPage = self::ITEMS_PER_PAGE; // počet článků na stránku

         $kazani = $this->database->table('videos')->page($page,$itemsPerPage); // získejte články podle volby menu
         $this->template->videos = $kazani; // získejte videa na stránku 
         
        $totalItems = $kazani->count('*'); // celkový počet článků
        $pageCount = (int) ceil($totalItems / $itemsPerPage);

        // Ošetření neplatné stránky
        if ($page < 1) {
            $this->redirect('this', ['page' => 1]);
        } elseif ($page > $pageCount) {
            $this->redirect('this', ['page' => $pageCount]);
        }

        $offset = ($page - 1) * $itemsPerPage;

        // Simulovaná data (v reálu dotaz na DB s LIMIT a OFFSET)
        $this->template->articles = range($offset + 1, min($offset + $itemsPerPage, $totalItems));

        // Info pro šablonu
        $this->template->page = $page;
        $this->template->pageCount = $pageCount;
    }


    public function handleProxyImage(): void
    {
        $url = 'https://www.fustero.es/index_cz.php';
        // $url = 'https://fustero.es/2025t2cz.jpg';
        $image = file_get_contents($url);

        // $this->getHttpResponse()->setContentType('image/jpeg');
        echo $image;
        exit;
    }

    /**
     * Metoda pro zobrazení dat aktuálnní sbotní školy v aktual.latte
     */

    public function renderAktual()
    {   
        $index = $this->fusteroTitle->getTitlesFromFustero();
        $this->template->lessons = $index;    
    }

}
