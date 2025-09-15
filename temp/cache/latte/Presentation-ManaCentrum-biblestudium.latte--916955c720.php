<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\tvfordeaf\app\Presentation\ManaCentrum/biblestudium.latte */
final class Template_916955c720 extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\tvfordeaf\\app\\Presentation\\ManaCentrum/biblestudium.latte';

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
<div class="container " style="margin-top: 50px; margin-bottom: 100px;width:60%;">
  <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:default')) /* line 4 */;
		echo '"style="text-decoration:none; color:blue">Domů</a> <i class="fa-solid fa-arrow-right"></i> <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('ManaCentrum:default')) /* line 4 */;
		echo '"style="text-decoration:none; color:blue">ManaCentrum</a>
       <div class="mb-3 border-2" style="margin-bottom:20px; border:1px solid grey; box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);
            -webkit-box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);
            -moz-box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);"><h1 style="color:blue;font-size:1.5rem" class="text-center">Studium Bible</h1>
            <p class="text-center"style="font-size:0.875rem">Bible videa</p>
        </div>
        <!-- Post -->
            <div class="row row-cols-sm-1 row-cols-md-2 g-5" style="margin-top:20px;"> 
                <article class="card__article scale">
                  <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('manacentrum:oldtestament')) /* line 14 */;
		echo '" class="href">
                    <img src="https://i.ytimg.com/vi/x0tXKeoKWOo/sddefault.jpg" class="card-img-top rounded-3" alt="..." style="width:100%; max-height:200px; object-fit:cover;">
                  </a>
                </article>
                  
                      <article class="card__article scale">
                        <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('manacentrum:newtestament')) /* line 22 */;
		echo '" class="href">
                          <img src="https://i.ytimg.com/vi/Yi93iPzrVXI/sddefault.jpg" class="card-img-top rounded-3" alt="..." style="width:100%; max-height:200px; object-fit:cover;">
                        </a>
                      </article>
                        
			            </div>

</div>
 
 

';
	}
}
