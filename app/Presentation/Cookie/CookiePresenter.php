<?php

declare(strict_types=1);

namespace App\Presentation\Cookie;

use Nette;

final class CookiePresenter extends Nette\Application\UI\Presenter
{
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