<?php

namespace App\Presenters;

use Nette;

abstract class BasePresenter extends Nette\Application\UI\Presenter
{
    /** @var string[] */
    protected array $acceptedCookies = [];

    public function startup(): void
    {
        parent::startup();

        $cookie = $this->getHttpRequest()->getCookie('cookies_accepted');
        $this->acceptedCookies = $cookie ? json_decode($cookie, true) : [];
    }

    protected function beforeRender(): void
    {
        parent::beforeRender();

        // pošleme info do šablon
        $this->template->cookiesAccepted = !empty($this->acceptedCookies);
        $this->template->hasAnalyticsConsent = in_array('analytics', $this->acceptedCookies, true);
        $this->template->hasMarketingConsent = in_array('marketing', $this->acceptedCookies, true);
    }

    public function handleAcceptCookies(string $category = 'all'): void
    {
        $this->acceptedCookies = match ($category) {
            'all' => ['essentials', 'analytics', 'marketing'],
            'analytics' => ['essentials', 'analytics'],
            'marketing' => ['essentials', 'analytics', 'marketing'],
            default => ['essentials'],
        };

        $this->getHttpResponse()->setCookie(
            'cookies_accepted',
            json_encode($this->acceptedCookies),
            strtotime('+1 year'),
            '/',       // path
            null,      // domain
            true,      // secure (https only)
            true,      // httpOnly
            'Strict'   // SameSite
        );

        if ($this->isAjax()) {
            $this->sendJson(['status' => 'ok']);
        } else {
            $this->redirect('this');
        }
    }

    public function handleMoreInfo(): void
    {
        $this->redirect('Home:cookies'); 
    }
}