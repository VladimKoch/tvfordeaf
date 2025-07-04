<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\tvfordeaf\app\Presentation\Home/default.latte */
final class Template_6f696a3439 extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\tvfordeaf\\app\\Presentation\\Home/default.latte';

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
			foreach (array_intersect_key(['post' => '22'], $this->params) as $ʟ_v => $ʟ_l) {
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
<div hx-target="this" hx-swap="outerHTML">

    <div class="container " style="margin-top: 20px; margin-bottom: 100px;">
             <div class="card-overlay">
            <div class="overlay"></div>
            <div class="text">Připravujeme</div>
          </div>
            <!-- Post -->
            <div class="row row-cols-1 row-cols-md-2 g-5"> 
          
';
		foreach ($posts as $post) /* line 22 */ {
			echo '		          <div>
              
              <div class="col-12">
                
                      <div class="card-group">
                        <div class="card card__container border-0 rounded-3">
                          <article class="card__article">
                        <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("{$post->presenter}:{$post->action}")) /* line 29 */;
			echo '" class="href">
                          <img src="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 30 */;
			echo '/uploads/img/';
			echo LR\Filters::escapeHtmlAttr($post->photo_url) /* line 30 */;
			echo '" class="card-img-top rounded-3 scale-down" alt="..." style="height: 300px; width: 100%; object-fit: cover;">
                          <div class="card-body card__data" style="background: rgb(6,14,131);background:linear-gradient(0deg,rgba(6,14,131,1) 0%, rgba(12,25,180,1) 100%);box-shadow: 1px 3px 18px 0px rgba(255,255,255,0.75) inset;
                                                                  -webkit-box-shadow: 1px 3px 18px 0px rgba(255,255,255,0.75) inset;
                                                                  -moz-box-shadow: 1px 3px 18px 0px rgba(255,255,255,0.75) inset;">
                            <span class="card__description" style="color:white">';
			echo LR\Filters::escapeHtmlText($post->content) /* line 34 */;
			echo '</span>
                              <h2 class="card__title text-center"style="color:white">';
			echo LR\Filters::escapeHtmlText($post->name) /* line 35 */;
			echo '</h2>
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

 
  <!--Main layout-->
</div>
';
	}
}
