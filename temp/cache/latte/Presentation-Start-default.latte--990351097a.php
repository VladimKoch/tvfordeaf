<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\tvfordeaf\app\Presentation\Start/default.latte */
final class Template_990351097a extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\tvfordeaf\\app\\Presentation\\Start/default.latte';

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
			foreach (array_intersect_key(['post' => '18'], $this->params) as $ʟ_v => $ʟ_l) {
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

		echo '
<div hx-target="this" hx-swap="outerHTML">
';
		$this->createTemplate('../header.latte', $this->params, 'include')->renderToContentType('html') /* line 6 */;
		echo '

    <div class="container " style="margin-top: 150px; margin-bottom: 100px;">
     <div class="mb-3 border-2" style="margin-bottom:20px; border:1px solid grey; box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);
-webkit-box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);
-moz-box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);"><h1 style="color:blue" class="text-center">Start!</h1>
        <p class="text-center">Tady můžete najít jak se naučit znakovou řeč.</p></div>
            <!-- Post -->
            <div class="row row-cols-1 row-cols-md-2 g-5"> 
';
		foreach ($posts as $post) /* line 18 */ {
			echo '		          <div>         
                <div class="col-12">
                      <div class="card-group">
                        <div class="card card__container border-0">
                          <article class="card__article">                     
                            <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("{$post->presenter}:{$post->action}")) /* line 23 */;
			echo '" class="href">
                              <img src="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 24 */;
			echo '/uploads/img/';
			echo LR\Filters::escapeHtmlAttr($post->photo_url) /* line 24 */;
			echo '" class="card-img-top scale-down" alt="..." style="height: 300px; width: 100%; object-fit: cover;">
                                <div class="card-body card__data" style="box-shadow: -2px -30px 85px -41px rgba(152,212,252,1) inset;
-webkit-box-shadow: -2px -30px 85px -41px rgba(152,212,252,1) inset;
-moz-box-shadow: -2px -30px 85px -41px rgba(152,212,252,1) inset;">
                                  <h5 class="card__title card-title text-center" stlye="color:blue">';
			echo LR\Filters::escapeHtmlText($post->title) /* line 29 */;
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
';
		$this->createTemplate('../footer.latte', $this->params, 'include')->renderToContentType('html') /* line 41 */;
		echo '</div>
';
	}
}
