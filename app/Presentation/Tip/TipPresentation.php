<?php

declare(strict_types=1);

namespace App\Presentation\Tip;

use Nette;


final class TipPresenter extends Nette\Application\UI\Presenter
{   

    /** @var int počet položek na stránku */
    private const ITEMS_PER_PAGE = 8;

    public function __construct(private \App\Model\ArticleManager $article,
                                private \Nette\Http\Request $request,
                                private \Nette\Database\Explorer $database)
    {
       
    }

    public function renderDefault( $page=1)
    {   
        $itemsPerPage = self::ITEMS_PER_PAGE; // počet článků na stránku

         
         $post = $this->database->table('tip'); // získejte články podle volby menu
         $this->template->topics = $post;
        //  $this->template->topics = $post->related('tip'); // získejte videa na stránku 
         
        //  $totalItems = $post->related('videos')->count(); // celkový počet článků



        // $pageCount = (int) ceil($totalItems / $itemsPerPage);

        // // Ošetření neplatné stránky
        // if ($page < 1) {
        //     $this->redirect('this', ['page' => 1]);
        // } elseif ($page > $pageCount) {
        //     $this->redirect('this', ['page' => $pageCount]);
        // }

        $offset = ($page - 1) * $itemsPerPage;

        // Simulovaná data (v reálu dotaz na DB s LIMIT a OFFSET)
        // $this->template->articles = range($offset + 1, min($offset + $itemsPerPage, $totalItems));

        // Info pro šablonu
        $this->template->page = $page;
        // $this->template->pageCount = $pageCount;



    }

    public function renderShow($postId): void
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
