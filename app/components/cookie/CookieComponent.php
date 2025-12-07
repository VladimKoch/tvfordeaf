<?php
namespace App\Components\cookie;

use Nette\Application\UI\Control;
use Nette\Http\Response;
use Nette\Http\Request;

class CookieComponent extends Control
{
    

    public function __construct(private Response $httpResponse, private Request $httpRequest)
    {
        $this->httpResponse = $httpResponse;
        $this->httpRequest = $httpRequest;
    }

    public function render()
    {   
        
        $this->beforeRender();

        // // 1. Logika (původně v beforeRender)
        // $this->cookiesAccepted = $this->httpRequest->getCookie('cookies_accepted') === '1';
        // $this->template->cookiesAccepted = $this->cookiesAccepted;
        // Cookies
        $this->template->setFile(__DIR__ . '/cookieComponent.latte');
        $this->template->render();
    }


    /** @persistent */
    public $cookiesAccepted = false;

    public function handleAcceptCookies()
    {
        $this->cookiesAccepted = true;
        // Uložení stavu do cookies na 1 rok
        $this->httpResponse->setCookie('cookies_accepted', '1', strtotime('+1 year'));

        // Volitelně přesměrování zpět, aby se stránka obnovila a lišta zmizela
        if ($this->httpRequest->isAjax()) {
            $this->getPresenter()->sendJson(['status' => 'ok']);
        } else {
            $this->redirect('this');
        }
    }

    protected function beforeRender()
    {
        // $cookies = $this->httpRequest->getCookies();
        // Kontrola, zda již uživatel cookies přijal
        $this->cookiesAccepted = $this->httpRequest->getCookie('cookies_accepted') === '1';
        $this->template->cookiesAccepted = $this->cookiesAccepted;

        
    }
    
    // Volitelná akce pro "Více informací"
    public function handleMoreInfo()
    {
        // Zde můžete přesměrovat uživatele na stránku s informacemi o cookies
        $this->redirect('Legal:cookies'); 
    }
}