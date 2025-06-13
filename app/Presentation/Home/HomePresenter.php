<?php

declare(strict_types=1);

namespace App\Presentation\Home;

use Nette;


final class HomePresenter extends Nette\Application\UI\Presenter
{   

    

    public function __construct(private \App\Model\ArticleManager $article,
                                private \Nette\Http\Request $request,
                                private \Nette\Database\Explorer $database)
    {
       
    }

    public function renderDefault()
    {       
        $this->template->posts = $this->article->findAllArticles();;
        
      

            // $post = $this->database->table('posts')->get($id);
            // $this->template->videos = $post->related('videa');
        
            // Získání aktuálně přihlášeného uživatele
            // $user = $this->getUser();

            // print_r($user->getIdentity()->getRoles()[0]);
            // die;
            
            // // Zkontrolujte, zda je uživatel přihlášen
            // if ($user->isLoggedIn()) {
            //     $this->template->username = $user->getIdentity()->email; // nebo jiný atribut s uživatelským jménem
            // } else {
            //     $this->template->username = null; // Není přihlášen
            // }
        
        
        // print_r($posts);
        // die;

        // $lastPage = 0;


        // $this->template->page = $page;
        // $this->template->lastPage = $lastPage;
        // $this->template->time = date('H:i:s');
   
}

    public function renderShow($postId): void
    {
        
        $posts = $this->article->findAllArticles()->get($postId);
        
        if($posts){
            $this->template->posts = $posts;
            $comments = $posts->related('comments');
            if($comments){
                $this->template->comments = $comments;
            }else{$this->error('Comenty nebyly nalezeny');

            }
        }else{

            $this->error('Posty nebyly nalezeny');
        }

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
