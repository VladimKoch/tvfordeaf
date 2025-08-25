<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\tvfordeaf\app\Presentation\ManaCentrum/skola.latte */
final class Template_4efaaa0558 extends Latte\Runtime\Template
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
<div class="container " style="margin-top: 100px; margin-bottom: 100px;width:60%;">
  <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:default')) /* line 4 */;
		echo '"style="text-decoration:none; color:blue">Domů</a> <i class="fa-solid fa-arrow-right"></i> <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('ManaCentrum:default')) /* line 4 */;
		echo '"style="text-decoration:none; color:blue">ManaCentrum</a>
       <div class="mb-3 border-2" style="margin-bottom:20px; border:1px solid grey; box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);
            -webkit-box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);
            -moz-box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);"><h1 style="color:blue;font-size:1.5rem" class="text-center">Sobotní škola</h1>
            <p class="text-center"style="font-size:0.875rem">Zde je studium sobotní školy materiály prezentace</p>
        </div>
        <!-- Post -->
            <div class="row row-cols-1 row-cols-md-2 g-5" style="margin-top:20px;"> 
              <div class="col-6 text-center">
                <article class="card__article scale">
                  <a href="https://onedrive.live.com/?redeem=aHR0cHM6Ly8xZHJ2Lm1zL3UvcyFBc1pKSDdpcGtrcVdwT05YU0lUVHMtRVVkZ0p5R2c%5FZT1WTlFVMUs&id=964A92A9B81F49C6%21602583&cid=964A92A9B81F49C6" class="href">
                    <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 15 */;
		echo '/uploads/img/archive.png" class="card-img-top rounded-3" alt="..." style="height: 200px; width: 50%; object-fit: cover;">
                  </a>
                </article>
                  <h5 class="text-center">Archív</h5>
                  </div>
                    <div class="col-6 text-center">
                      <article class="card__article scale">
                        <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('ManaCentrum:aktual')) /* line 22 */;
		echo '" class="href">
                          <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 23 */;
		echo '/uploads/img/check.png" class="card-img-top rounded-3" alt="..." style="height: 200px; width: 45%; object-fit: cover;">
                        </a>
                      </article>
                        <h5 class="text-center">Aktuální čtvrtletí</h5>
                    </div>
			            </div>

</div>
 
 

';
	}
}
