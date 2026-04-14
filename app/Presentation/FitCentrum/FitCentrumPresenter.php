<?php

declare(strict_types=1);

namespace App\Presentation\FitCentrum;
use App\Presenters\BasePresenter;
use Nette\DI\Attributes\Inject;

use Nette;


final class FitCentrumPresenter extends BasePresenter
{   

    /** @var int počet položek na stránku */
    private const ITEMS_PER_PAGE = 8;

    // public function __construct(private \Nette\Database\Explorer $database)
    // {}

    #[Inject]
    public Nette\Database\Explorer $database;


    /**
     * Renderuje výchozí stránku pro FitCentrum. Získává data z databáze a předává je do šablony.
     */
    public function renderDefault()
    {   
        $itemsPerPage = self::ITEMS_PER_PAGE; // počet článků na stránku

         
         $post = $this->database->table('fitcentrum'); // získejte články podle volby menu
         $this->template->topics = $post; 

         
        //  $totalItems = $post->related('videos')->count(); // celkový počet článků



        // $pageCount = (int) ceil($totalItems / $itemsPerPage);

        // Ošetření neplatné stránky
        // if ($page < 1) {
        //     $this->redirect('this', ['page' => 1]);
        // } elseif ($page > $pageCount) {
        //     $this->redirect('this', ['page' => $pageCount]);
        // }

        // $offset = ($page - 1) * $itemsPerPage;

        // // Simulovaná data (v reálu dotaz na DB s LIMIT a OFFSET)
        // $this->template->articles = range($offset + 1, min($offset + $itemsPerPage, $totalItems));

        // // Info pro šablonu
        // $this->template->page = $page;
        // $this->template->pageCount = $pageCount;



    }

    /**
     * Renderuje stránku pro sekci "Tepny". Získává data z databáze a předává je do šablony.
     */
    public function renderSekceTepny()
    {
            $posts = $this->template->posts = $this->database->table('bylinky')
            ->where('sekce_id', 4);
            $this->template->posts = $posts;
    }

    /**
     * Renderuje stránku pro sekci "Infekce". Získává data z databáze a předává je do šablony.
     */
    public function renderSekceInfekce()
    {
            $posts = $this->template->posts = $this->database->table('bylinky')
            ->where('sekce_id', 5);
            $this->template->posts = $posts;
    }

    /**
     * Renderuje stránku pro sekci "Nervy". Získává data z databáze a předává je do šablony.
     */
    public function renderSekceNerv()
    {
            $posts = $this->template->posts = $this->database->table('bylinky')
            ->where('sekce_id', 2);
            $this->template->posts = $posts;
    }

    /**
     * Renderuje stránku pro sekci "Krk, nos, ústa". Získává data z databáze a předává je do šablony.
     */
    public function renderSekceKrk()
    {$posts = $this->template->posts = $this->database->table('bylinky')
            ->where('sekce_id', 3);
            $this->template->posts = $posts;
    }

    /**
     * Renderuje stránku pro sekci "Oči". Získává data z databáze a předává je do šablony.
     */
    public function renderSekceOko()
    {
            // Vyfiltruje pouze bylinky, které mají sekce_id = 4
        $posts = $this->template->posts = $this->database->table('bylinky')
            ->where('sekce_id', 1);
            $this->template->posts = $posts;
    }

    /**
     * Renderuje stránku s bylinkami. Získává data z databáze a předává je do šablony.
     */
    public function renderBozilekarna()
    {
         $bylinky = $this->database->table('bylinky'); // získejte články podle volby menu
         $this->template->bylinky = $bylinky;
    }

    /*
     * Renderuje stránku s bylinkami. Získává data z databáze a předává je do šablony.
     */
    public function renderSekcerostlin()
    {
        $sekce = $this->database->table('sekcerostlin');
        $this->template->sekce = $sekce;
    }


    
    public function renderShow(int $postId): void
    {
        
        // $posts = $this->article->findAllArticles()->get($postId);
        
        // if($posts){
        //     $this->template->posts = $posts;
        //     $comments = $posts->related('comments');
        //     if($comments){
        //         $this->template->comments = $comments;
        //     }else{$this->error('Comenty nebyly nalezeny');

        //     }
        // }else{

        //     $this->error('Posty nebyly nalezeny');
        // }

        // if($postId){
        //     $comments = $this->database->table('posts')->get($postId);
        //     if(!$comments)
        //     {
        //         $this->error('Stránka nebyla nalezena');
        //     }
        //     $this->template->comments = $comments->related('comments');
        // }
    }

    public function handleClick(): void
    {   
        
        if($this->isAjax()){
            
            bdump($this->isAjax());
            $time = 'ogon';
            $this->template->time = $time;
            $this->redrawControl('mySnippet');
  
        }else{
            $this->flashMessage('Neni AJax');
            $this->redirect('this');
        }

    }

    
}
