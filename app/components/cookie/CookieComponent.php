<?php
namespace App\Components\cookie;

use Nette\Application\UI\Control;
use Nette\Http\Response;

class CookieComponent extends Control
{
    

    public function __construct(private Response $httpResponse)
    {
        $this->httpResponse = $httpResponse;
    }

    public function render()
    {
        $this->template->setFile(__DIR__ . '/cookieComponent.latte');
        $this->template->render();
    }


    /** @persistent */
    public $cookiesAccepted = false;

    public function handleAcceptCookies()
    {
        $this->cookiesAccepted = true;
        // Uložení stavu do cookies na 1 rok
        $this->getHttpResponse()->setCookie('cookies_accepted', '1', strtotime('+1 year'));

        // Volitelně přesměrování zpět, aby se stránka obnovila a lišta zmizela
        if ($this->isAjax()) {
            $this->sendJson(['status' => 'ok']);
        } else {
            $this->redirect('this');
        }
    }

    protected function beforeRender()
    {
        // Kontrola, zda již uživatel cookies přijal
        $this->cookiesAccepted = $this->getHttpRequest()->getCookie('cookies_accepted') === '1';
        $this->template->cookiesAccepted = $this->cookiesAccepted;

        // ... váš další kód před renderováním ...
    }
    
    // Volitelná akce pro "Více informací"
    public function handleMoreInfo()
    {
        // Zde můžete přesměrovat uživatele na stránku s informacemi o cookies
        $this->redirect('Legal:cookies'); 
    }
}