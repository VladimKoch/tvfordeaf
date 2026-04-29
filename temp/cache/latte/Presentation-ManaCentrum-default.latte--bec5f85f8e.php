<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\tvfordeaf\app\Presentation\ManaCentrum/default.latte */
final class Template_bec5f85f8e extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\tvfordeaf\\app\\Presentation\\ManaCentrum/default.latte';

	public const Blocks = [
		['title' => 'blockTitle', 'content' => 'blockContent'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		$this->renderBlock('title', get_defined_vars()) /* line 2 */;
		echo "\n";
		$this->renderBlock('content', get_defined_vars()) /* line 3 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['post' => '23'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}


	/** {block title} on line 2 */
	public function blockTitle(array $ʟ_args): void
	{
		echo 'ManaCentrum';
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
		echo '" class="text-decoration-none fw-bold " style="color:blue;">Domů</a> 
            <i class="fa-solid fa-chevron-right text-muted mx-2" style="font-size: 0.8rem;"></i> 
            
            <span class="text-muted fw-semibold">ManaCentrum</span>
        </div>

      <div class="border border-black-900 rounded overflow-hidden shadow-sm" style="height:70px;margin-bottom:20px; background: white;">
        <h1 style="color:blue;font-size:1.5rem" class="text-center">ManaCentrum</h1>
            <p class="text-center" style="font-size:0.875rem">Tady najdete kázání, písně, fotoverše atd.</p></div>
                <!-- Post -->
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-5"> 
';
		foreach ($posts as $post) /* line 23 */ {
			echo '                  <div>
                    <div class="col-12">
                          <div class="card-group">
                              <div class="card card__container border-0">
                                <article class="card__article">                  
                                    <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("{$post->presenter}:{$post->action}")) /* line 28 */;
			echo '" class="href">
                                        <img src="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 29 */;
			echo '/uploads/img/';
			echo LR\Filters::escapeHtmlAttr($post->photo_url) /* line 29 */;
			echo '" class="shadow-sm card-img-top scale-down" alt="..." style="height: 250px; width: 100%; object-fit: cover;">
                                          <div class="card-body card__data" style="background: rgb(6,14,131);background:linear-gradient(0deg,rgba(6,14,131,1) 0%, rgba(12,25,180,1) 100%);box-shadow: 1px 3px 18px 0px rgba(255,255,255,0.75) inset;
                                                                  -webkit-box-shadow: 1px 3px 18px 0px rgba(255,255,255,0.75) inset;
                                                                  -moz-box-shadow: 1px 3px 18px 0px rgba(255,255,255,0.75) inset;">
          
                                            <h5 class="card-title card__title text-center" style="color:white">';
			echo LR\Filters::escapeHtmlText($post->title) /* line 34 */;
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

		echo '          </div>
    </div>
  </div>
';
	}
}
