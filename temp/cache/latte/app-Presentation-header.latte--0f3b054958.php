<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\tvfordeaf\app\Presentation\header.latte */
final class Template_0f3b054958 extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\tvfordeaf\\app\\Presentation\\header.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo '


<nav class="navbar navbar-expand-lg navbar-expand-sm header" style="height: 65px; width: 70%; margin:auto; border-radius:0 0 10px 10px;">
    <div class="container-fluid">
        <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:default')) /* line 6 */;
		echo '" class="navbar-brand">
            <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 7 */;
		echo '/uploads/img/ucho.jpg" alt="Symbol for Deaf" class="ucho" style="border-radius: 20%; height: 40px; width: 40px;">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu" aria-controls="navmenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">

            <ul class="nav-ul navbar-nav" style="list-style-type: none; gap:15px; margin-left: 20px;">
                <li class="nav-item"><a class="nav-link" href="#">Možnosti</a></li>
                <li class="nav-item"><a class="nav-link" href="#">O nás</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Novinky</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Pomoc</a></li>
            </ul>
            <ul class="navbar-nav ms-auto d-flex align-items-center">
                <li class="nav-item">
                    <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 24 */;
		echo '/uploads/img/Fulllogo-origin.png" class="me-5 pb-1" style="height:40px; width:40px; transform: scale(1.2);">
                </li>
            </ul>
        </div>
    </div>
</nav>';
	}
}
