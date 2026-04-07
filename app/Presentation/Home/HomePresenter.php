<?php

declare(strict_types=1);

namespace App\Presentation\Home;


use App\Components\cookie\CookieComponent;
use App\Presenters\BasePresenter;
use Nette;
use Nette\Utils\Finder;

use \App\Model\ArticleManager;

final class HomePresenter extends BasePresenter
{   

    

    public function __construct(private ArticleManager $article,
                                )
    {}


    public function renderProcessPhotos(): void
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

    //     // Absolutní cesty ke složkám (upravte podle struktury vašeho projektu)
    // $sourceDir = __DIR__ . '/../../../www/images/verses_source';
    // $targetDir = __DIR__ . '/../../../www/images/verses';

    // // 1. Načtení všech fotek (podporuje jpg, jpeg, png)
    // $files = [];
    // foreach (Finder::findFiles('*.jpg', '*.jpeg', '*.png')->in($sourceDir) as $file) {
    //     $files[] = $file;
    // }

    // // Volitelné: Seřazení souborů podle abecedy
    // usort($files, fn($a, $b) => strcmp($a->getFilename(), $b->getFilename()));

    // // 2. Příprava data od 1.1.2026 na celý rok
    // $start = new \DateTime('2026-01-01');
    // $end = new \DateTime('2027-01-01');
    // $interval = new \DateInterval('P1D');
    // $period = new \DatePeriod($start, $interval, $end);

    // $fileIndex = 0;
    // $totalFiles = count($files);

    // foreach ($period as $date) {
    //     $dateString = $date->format('Y-m-d');
        
    //     // Pokud máme ještě nějakou nepřiřazenou fotku
    //     if ($fileIndex < $totalFiles) {
    //         $originalFile = $files[$fileIndex];
    //         $extension = strtolower($originalFile->getExtension());
    //         $newFileName = $dateString . '.' . $extension; // např. 2026-01-01.jpg
            
    //         // Zkopírujeme soubor pod novým názvem (bezpečnější než přesunout)
    //         copy($originalFile->getPathname(), $targetDir . '/' . $newFileName);
            
    //         $imagePath = $newFileName;
    //         $fileIndex++;
    //     } else {
    //         // Fotky došly (jsme u dne 261), použijeme výchozí obrázek
    //         $imagePath = 'default.jpg'; 
    //     }

    //     // 3. Uložení nebo aktualizace v databázi
    //     $this->database->query('INSERT INTO fotoverse ? ON DUPLICATE KEY UPDATE ?', [
    //         'display_date' => $dateString,
    //         'image_path' => $imagePath,
    //         'verse_text' => 'Tento den čeká na svůj verš...',
    //     ], [
    //         'image_path' => $imagePath, // Pokud už datum existuje, přepíšeme jen cestu k obrázku
    //     ]);
    // }
    
    // echo "Hotovo! Zkopírováno a přejmenováno $fileIndex fotek. Celý rok 2026 je v databázi.";
    // die(); // Zastaví vykreslování, aby se nenačítala šablona
   
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
