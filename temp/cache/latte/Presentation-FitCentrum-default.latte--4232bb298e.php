<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\tvfordeaf\app\Presentation\FitCentrum/default.latte */
final class Template_4232bb298e extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\tvfordeaf\\app\\Presentation\\FitCentrum/default.latte';

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

		$this->renderBlock('content', get_defined_vars()) /* line 3 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['topic' => '22'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		$this->parentName = '../@layout.latte';
		return get_defined_vars();
	}


	/** {block content} on line 3 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '
<div class="container py-5">
    <div class="col-xl-10 mx-auto">
        
        <div class="">
            <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:default')) /* line 11 */;
		echo '" class="text-decoration-none fw-bold " style="color:green;">Domů</a> 
            <i class="fa-solid fa-chevron-right text-muted mx-2" style="font-size: 0.8rem;"></i> 
            <span class="text-muted fw-semibold">Fit Centrum</span>
        </div>

      <div class="border border-black-900 rounded overflow-hidden shadow-sm" style="height:70px;margin-bottom:20px; background: white;">
        <h1 style="color:green;font-size:1.5rem" class="text-center">Fit Centrum</h1>
            <p class="text-center" style="font-size:0.875rem">Zde najdete vše o zdraví a jak být fit</p></div>
            <!-- Post -->
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-5"> 
';
		foreach ($topics as $topic) /* line 22 */ {
			echo '		          <div>   
                <div class="col-12">
                      <div class="card-group">
                        <div class="card  card__container border-0">
                          <article class="card__article">
                          <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("{$topic->presenter}:{$topic->action}")) /* line 27 */;
			echo '" class="fit-href">
                           

                              <img src="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 30 */;
			echo '/uploads/img/';
			echo LR\Filters::escapeHtmlAttr($topic->photo_url) /* line 30 */;
			echo '" class="card-img-top rounded-3 scale-down" alt="..." style="height: 250px; width: 100%; object-fit: cover;">
                              <div class="card-body card__data" style="background: rgb(18, 134, 0);background:linear-gradient(0deg,rgba(18, 134, 0,1) 0%, rgb(62, 180, 12) 100%);box-shadow: 1px 3px 18px 0px rgba(255,255,255,0.75) inset;
                                                                  -webkit-box-shadow: 1px 3px 18px 0px rgba(255,255,255,0.75) inset;
                                                                  -moz-box-shadow: 1px 3px 18px 0px rgba(255,255,255,0.75) inset;">
                              <span class="card__description">';
			echo LR\Filters::escapeHtmlText($topic->content) /* line 34 */;
			echo '</span>
                                <h5 class="card__title card-title text-center" style="color:white">';
			echo LR\Filters::escapeHtmlText($topic->title) /* line 35 */;
			echo '</h5>
                            
                              </div>
                            </a>
                            </article>
                        </div>
                  </div>
                </div>
            </div>    
';

		}

		echo '			</div>

</div>

</div>
';
	}
}
