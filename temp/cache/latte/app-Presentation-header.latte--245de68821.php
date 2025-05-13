<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\tvfordeaf\app\Presentation\header.latte */
final class Template_245de68821 extends Latte\Runtime\Template
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
    

<nav class="navbar navbar-expand-lg navbar-expand-sm header fixed-top" style="background: #2a359b;
background: linear-gradient(19deg,rgba(42, 53, 155, 1) 19%, rgba(159, 188, 227, 1) 45%, rgba(255, 255, 255, 1) 60%);">
		<div class="container-fluid">
		<div class="collapse navbar-collapse" id="navmenu">

			<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:default')) /* line 18 */;
		echo '" class="navbar-brand">
             <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 19 */;
		echo '/uploads/img/ucho.jpg" alt="Symbol for Deaf" class="ms-3 ucho" style="border-radius: 20%; width:18%; height:18%">
                    </a>
			<ul class="navbar-nav ms-auto">
			<li class="nav-item mt-2" style="margin-right:-150px">
				<img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 27 */;
		echo '/uploads/img/tvfodeaf-big.png" class="img-fluid overflove-none" style="height:75%; width:65%; margin-bottom:-10px">
			</li>
	
			</ul>
			</div>
		</div>
	</nav>
';
	}
}
