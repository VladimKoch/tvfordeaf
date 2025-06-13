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
                                private \App\Service\FusteroService $fusteroService)
    {
       
    }

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

    public function renderSkola()
    {   
        $this->template->html = $this->fusteroService->fetchPage();
    }

    

    public function renderProdeti($page=1){




          // Youtube playlist URL pro neslyšící
        $playlistUrl = 'https://www.youtube.com/playlist?list=PLGng993tSmjEqFx6w4ohGY3xJOXjtePtd';

        // spusť yt-dlp s JSON výstupem
        $jsonOutput = shell_exec('yt-dlp --flat-playlist -J ' . escapeshellarg($playlistUrl));

        
        if (!$jsonOutput) {
            $this->flashMessage('Nepodařilo se načíst playlist.', 'danger');
            $this->template->pribehy = [];
            return;
        }

        $data = json_decode($jsonOutput);

            //   echo '<pre>';
            //   print_r($data->entries);
            //   echo '</pre>';
            //   die;

    
        $videos=$data->entries;
        $videoId = [];

        foreach($videos as $video){
            
            parse_str(parse_url($video->url, PHP_URL_QUERY), $query);
            $videoId[]= ['title'=>$video->title,'url'=>$query['v'] ?? null];
        }
    // echo'<pre>';
    // print_r($videoId);
    // echo'</pre>';
    // die;

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

      public function renderVideos($page=1)
    {   


          // Youtube playlist URL pro neslyšící
        $playlistUrl = 'https://www.youtube.com/playlist?list=PLGng993tSmjEqFx6w4ohGY3xJOXjtePtd';

        // spusť yt-dlp s JSON výstupem
        $jsonOutput = shell_exec('yt-dlp --flat-playlist -J ' . escapeshellarg($playlistUrl));

        
        if (!$jsonOutput) {
            $this->flashMessage('Nepodařilo se načíst playlist.', 'danger');
            $this->template->pribehy = [];
            return;
        }

        $data = json_decode($jsonOutput);

            //   echo '<pre>';
            //   print_r($data->entries);
            //   echo '</pre>';
            //   die;

    
        $videos=$data->entries;
        $videoId = [];

        foreach($videos as $video){
            
            parse_str(parse_url($video->url, PHP_URL_QUERY), $query);
            $videoId[]= ['title'=>$video->title,'url'=>$query['v'] ?? null];
        }
    // echo'<pre>';
    // print_r($videoId);
    // echo'</pre>';
    // die;

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

    public function renderArchiv(){
        
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


    // public function handleClick(): void
    // {   
        
    //     if($this->isAjax()){
            
    //         bdump($this->isAjax());
    //         $time = 'ogon';
    //         $this->template->time = $time;
    //         $this->redrawControl('mySnippet');
  
    //     }else{
    //         $this->flashMessage('Neni AJax');
    //         $this->redirect('this');
    //     }

    // }

    
}
