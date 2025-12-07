<?php

declare(strict_types=1);

namespace App\Presentation\Cookie;

use Nette;
// use Nette\Http\Request;

final class CookiePresenter extends Nette\Application\UI\Presenter
{


    // private Request $httpRequest;

    // Předáme si Request přes konstruktor
    // public function __construct(Request $httpRequest)
    // {
    //     $this->httpRequest = $httpRequest;
    // }


    


    public function actionAcceptAnalytics(): void
    {
        $this->getSession('consent')->set('analytics', true);
        $this->sendJson(['status' => 'accepted']);
    }

    public function actionDeclineAnalytics(): void
    {
        $this->getSession('consent')->set('analytics', false);
        $this->sendJson(['status' => 'declined']);
    }
}