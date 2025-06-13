<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\tvfordeaf\app\Presentation\ManaCentrum/default.latte */
final class Template_a3ac32091e extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\tvfordeaf\\app\\Presentation\\ManaCentrum/default.latte';

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
			foreach (array_intersect_key(['post' => '14'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}


	/** {block content} on line 3 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '      <div class="container " style="margin-top: 200px; margin-bottom: 100px;">
       <div class="mb-3 border-2" style="margin-bottom:20px; border:1px solid grey; box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);
            -webkit-box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);
            -moz-box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);"><h1 style="color:blue" class="text-center">ManaCentrum</h1>
            <p class="text-center">Tady najdete kázání, písně, fotoverše atd.</p></div>
                <!-- Post -->
                <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-5"> 
';
		foreach ($posts as $post) /* line 14 */ {
			echo '                  <div>
                    <div class="col-12">
                          <div class="card-group">
                              <div class="card card__container border-0">
                                <article class="card__article">                  
                                    <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("{$post->presenter}:{$post->action}")) /* line 19 */;
			echo '" class="href">
                                        <img src="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 20 */;
			echo '/uploads/img/';
			echo LR\Filters::escapeHtmlAttr($post->photo_url) /* line 20 */;
			echo '" class="card-img-top scale-down" alt="..." style="height: 300px; width: 100%; object-fit: cover;">
                                          <div class="card-body card__data" style="background: rgb(6,14,131);background:linear-gradient(0deg,rgba(6,14,131,1) 0%, rgba(12,25,180,1) 100%);box-shadow: 1px 3px 18px 0px rgba(255,255,255,0.75) inset;
                                                                  -webkit-box-shadow: 1px 3px 18px 0px rgba(255,255,255,0.75) inset;
                                                                  -moz-box-shadow: 1px 3px 18px 0px rgba(255,255,255,0.75) inset;">
                                            <h5 class="card-title card__title text-center" style="color:white">';
			echo LR\Filters::escapeHtmlText($post->title) /* line 25 */;
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
';
	}
}
