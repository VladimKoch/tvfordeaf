<?php

namespace App\Presenters;

use Nette;
use Nette\Application\UI\Form;
use Nette\Mail\SmtpMailer;

abstract class BasePresenter extends Nette\Application\UI\Presenter
{
    /** @var string[] */
    protected array $acceptedCookies = [];

    public function startup(): void
    {
        parent::startup();

        $this->getHttpResponse()->setHeader('Cache-Control', 'no-cache, no-store, must-revalidate');
        $this->getHttpResponse()->setHeader('Pragma', 'no-cache');
        $this->getHttpResponse()->setHeader('Expires', '0');

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


        // V presenteru, např. v BasePresenter.php, který dědí všechny ostatní presentery
    protected function createComponentContactForm(): Form
    {
        $form = new Form;
        $form->addText('name', 'Jméno:')
            ->setRequired('Zadejte své jméno.');
        $form->addEmail('email', 'E-mail:')
            ->setRequired('Zadejte svůj e-mail.');
        $form->addTextArea('message', 'Zpráva:')
            ->setRequired('Napište nám zprávu.')
            ->setHtmlAttribute('rows', 1);

        $form->addSubmit('submit', 'Odeslat zprávu')

        ->setHtmlAttribute('class', 'form-button-container')
        ->setHtmlAttribute('class', 'btn btn-primary');
        // ->setHtmlAttribute('style', 'background-color: #007bff; color: white; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer;');

        $form->onSuccess[] = [$this, 'contactFormSucceeded'];

        return $form;
    }

    public function contactFormSucceeded(Form $form, \stdClass $data): void
    {
        // Zde bude logika odesílání e-mailu
        $mail = new Nette\Mail\Message;
        $mail->setFrom('info@tvfordeaf.com')
            ->addTo('info@tvfordeaf.com')
            ->setSubject('Zpráva z webu TVforDeaf')
            ->setBody("Jméno: {$data->name}\nE-mail: {$data->email}\n\nZpráva:\n{$data->message}")
            ->addReplyTo($data->email);

        $mailer = new SmtpMailer(
                    host: 'wes1-smtp.wedos.net',
                    username: 'info@tvfordeaf.com',
                    // password: 'sipc wgvh qaxn tsmx',
                    password: 'F2XBCfrev*',
                    port: 587,
                    encryption: 'tls'); // Nebo SmtpMailer
        $mailer->send($mail);

        $this->flashMessage('Vaše zpráva byla úspěšně odeslána. Děkujeme!', 'success');
        $this->redirect('this'); // Zůstane na stejné stránce
    }
}