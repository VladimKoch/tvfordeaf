<?php

declare(strict_types=1);

namespace App\Presentation\ManaCentrum;

use Nette;


final class ManaCentrumPresenter extends Nette\Application\UI\Presenter
{   

    /** @var int počet položek na stránku */
    private const ITEMS_PER_PAGE = 8;

    public function __construct(private \App\Model\ArticleManager $article,
                                private \Nette\Http\Request $request,
                                private \Nette\Database\Explorer $database)
    {
       
    }

    public function renderDefault()
    {     
         $this->template->posts= $this->database->table('manacentrum'); // získejte články podle volby menu
    }

      public function renderVideos($page=1)
    {   
        $itemsPerPage = self::ITEMS_PER_PAGE; // počet článků na stránku

         $post = $this->database->table('videos')->page($page,$itemsPerPage); // získejte články podle volby menu
         $this->template->videos = $post; // získejte videa na stránku 
         
        $totalItems = $post->count(); // celkový počet článků
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
