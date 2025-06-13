<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\tvfordeaf\app\Presentation\ManaCentrum/skola.latte */
final class Template_8b48f6fe8a extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\tvfordeaf\\app\\Presentation\\ManaCentrum/skola.latte';

	public const Blocks = [
		['content' => 'blockContent'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '
<div class="container " style="margin-top: 200px; margin-bottom: 100px;">
       <div class="mb-3 border-2" style="margin-bottom:20px; border:1px solid grey; box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);
            -webkit-box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);
            -moz-box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);"><h1 style="color:blue" class="text-center">Sobotní škola</h1>
            <p class="text-center">Zde je studium sobotní školy materiály prezentace</p>
        </div>

        <!-- Post -->
            <div class="row row-cols-1 row-cols-md-2 g-5"> 
          
              
              <div class="col-6 text-center">
                
                          <article class="card__article scale">
                        <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('ManaCentrum:archiv')) /* line 20 */;
		echo '" class="href">
                          <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 21 */;
		echo '/uploads/img/archive.png" class="card-img-top rounded-3" alt="..." style="height: 300px; width: 50%; object-fit: cover;">
                          </a>
                        </article>
                          <h5 class="text-center">Archív</h5>
                </div>
              <div class="col-6 text-center">
                
                          <article class="card__article scale">
                        <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('ManaCentrum:archiv')) /* line 43 */;
		echo '" class="href">
                          <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 44 */;
		echo '/uploads/img/check.png" class="card-img-top rounded-3" alt="..." style="height: 300px; width: 45%; object-fit: cover;">
                          </a>
                        </article>
                          <h5 class="text-center">Aktuální čtrtletí</h5>
            </div>
			</div>

</div>
        <ul>
</ul>




';
	}
}
