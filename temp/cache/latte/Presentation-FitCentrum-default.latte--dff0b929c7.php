<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\tvfordeaf\app\Presentation\FitCentrum/default.latte */
final class Template_dff0b929c7 extends Latte\Runtime\Template
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
			foreach (array_intersect_key(['topic' => '13'], $this->params) as $ʟ_v => $ʟ_l) {
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

    <div class="container" style="margin-top: 150px; margin-bottom: 100px;">
            <!-- Post -->
            <div class="row g-4 py-5 row-cols-4 row-cols-lg-4"> 
          
';
		foreach ($topics as $topic) /* line 13 */ {
			echo '		          <div>
              
              <div class="col-12">
                
                      <div class="card-group">
                        <div class="card fit border-0">
                          <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("{$topic->presenter}:{$topic->action}")) /* line 19 */;
			echo '">
                              <img src="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 21 */;
			echo '/uploads/img/';
			echo LR\Filters::escapeHtmlAttr($topic->photo_url) /* line 21 */;
			echo '" class="card-img-top" alt="..." style="height: 350px; width: 100%; object-fit: cover;">
                              <div class="card-body">
                                <h5 class="card-title text-center">';
			echo LR\Filters::escapeHtmlText($topic->title) /* line 24 */;
			echo '</h5>
                              </div>
                            </a>
                        </div>
                  </div>
                </div>
            </div>
';

		}

		echo '                
			</div>
</div>





  
 
  <!--Main layout-->
';
		$this->createTemplate('../footer.latte', $this->params, 'include')->renderToContentType('html') /* line 65 */;
		echo '</div>
';
	}
}
