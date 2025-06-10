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
        } elseif (strpos($video['title'], 'Kázání') !== false) {
            // vložit do tabulky kázání
            try{

                $this->database->table('videos')->insert([
                    'title' => $video['title'],
                    'video_url' => $video['url'],
                    'created_at' => new \DateTime(),
                ]);
            }catch(\Nette\Database\UniqueConstraintViolationException $e) {
                    // Přeskoč duplicitní řádek
                    continue;
                }
        }

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
