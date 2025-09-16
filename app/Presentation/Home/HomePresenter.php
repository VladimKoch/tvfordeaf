<?php

declare(strict_types=1);

namespace App\Presentation\Home;
use App\Components\cookie\CookieComponent;
use App\Presenters\BasePresenter;
use Nette;


final class HomePresenter extends BasePresenter
{   

    

    public function __construct(private \App\Model\ArticleManager $article,
                                )
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

//  /** @var string[] */
//     protected array $acceptedCookies = [];

//     public function startup(): void
//     {
//         parent::startup();

//         $cookie = $this->getHttpRequest()->getCookie('cookies_accepted');
//         $this->acceptedCookies = $cookie ? json_decode($cookie, true) : [];
//     }

//     protected function beforeRender(): void
//     {
//         parent::beforeRender();

//         // pošleme info do šablon
//         $this->template->cookiesAccepted = !empty($this->acceptedCookies);
//         $this->template->hasAnalyticsConsent = in_array('analytics', $this->acceptedCookies, true);
//         $this->template->hasMarketingConsent = in_array('marketing', $this->acceptedCookies, true);
//     }

//     public function handleAcceptCookies(string $category = 'all'): void
//     {
//         $this->acceptedCookies = match ($category) {
//             'all' => ['essentials', 'analytics', 'marketing'],
//             'analytics' => ['essentials', 'analytics'],
//             'marketing' => ['essentials', 'analytics', 'marketing'],
//             default => ['essentials'],
//         };

//         $this->getHttpResponse()->setCookie(
//             'cookies_accepted',
//             json_encode($this->acceptedCookies),
//             strtotime('+1 year'),
//             '/',       // path
//             null,      // domain
//             true,      // secure (https only)
//             true,      // httpOnly
//             'Strict'   // SameSite
//         );

//         if ($this->isAjax()) {
//             $this->sendJson(['status' => 'ok']);
//         } else {
//             $this->redirect('this');
//         }
//     }

//     public function handleMoreInfo(): void
//     {
//         $this->redirect('Home:cookies'); 
//     }

   
 
}
