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

<nav class="navbar navbar-expand-lg navbar-expand-sm header" style=" height: 65px; width: 70%;  margin:auto; border-radius:0 0 10px 10px ">
		<div class="container-fluid">
		<div class="collapse navbar-collapse" id="navmenu" syle="border:solid black 1px;">
			<div style="display:flex; align-items:center; " >
			<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:default')) /* line 9 */;
		echo '"style="">
			 
      
             <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 12 */;
		echo '/uploads/img/ucho.jpg" alt="Symbol for Deaf" class="ucho" style="border-radius: 20%; ">
                    </a>
       
		  
			<ul class="nav-ul" style="display:flex; list-style-type: none; gap:15px;align-items:center;margin-top:10px; margin-right:10px;">
				<li><a href="#">Možnosti</a></li>
				<li><a href="#">O nás</a></li>
				<li><a href="#">Novinky</a></li>
				<li><a href="#">Pomoc</a></li>
			</ul>
		  
		  </div>
          
			<ul class="navbar-nav ms-auto">
			<li class="nav-item mt-2" style="">
				<img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 27 */;
		echo '/uploads/img/Fulllogo-origin.png" class="me-5 pb-1" style="height:40px; width:40px; transform: scale(1.2);">

			</li>
	
			</ul>

			</div>
		</div>
	</nav>
';
	}
}
