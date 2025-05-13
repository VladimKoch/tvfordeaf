<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\tvfordeaf\app\Presentation\ManaCentrum/videos.latte */
final class Template_e4c7d9a995 extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\tvfordeaf\\app\\Presentation\\ManaCentrum/videos.latte';

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
			foreach (array_intersect_key(['video' => '13'], $this->params) as $ʟ_v => $ʟ_l) {
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

    <div class="container px-4 py-5" style="margin-top: 150px; margin-bottom: 100px;">
            <!-- Post -->
            <div class="row g-4 py-5 row-cols-2 row-cols-lg-4"> 
          
';
		foreach ($videos as $video) /* line 13 */ {
			echo '		          <div>
              
              <div class="col-12">
                
                      <div class="card-group">
                        <div class="card border-0">
                        <iframe width="100%" height="200px" src="https://www.youtube.com/embed/';
			echo LR\Filters::escapeHtmlAttr($video->video_url) /* line 19 */;
			echo '" frameborder="0" allowfullscreen></iframe>
                        </div>
                  </div>
                </div>
            </div>
';

		}

		echo '			</div>
    <nav aria-label="Jednoduchá stránkování" class="d-flex justify-content-center">
  <ul class="pagination">

    <li class="page-item ';
		if ($page <= 1) /* line 48 */ {
			echo 'disabled';
		}
		echo '">
      <a class="page-link" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('this', ['page' => $page - 1])) /* line 49 */;
		echo '">Předchozí</a>
    </li>

';
		for ($i = 1;
		$i <= $pageCount;
		$i++) /* line 52 */ {
			echo '      <li class="page-item ';
			if ($i === $page) /* line 53 */ {
				echo 'active';
			}
			echo '">
        <a class="page-link" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('this', ['page' => $i])) /* line 54 */;
			echo '">';
			echo LR\Filters::escapeHtmlText($i) /* line 54 */;
			echo '</a>
      </li>
';

		}
		echo '
    <li class="page-item ';
		if ($page >= $pageCount) /* line 58 */ {
			echo 'disabled';
		}
		echo '">
      <a class="page-link" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('this', ['page' => $page + 1])) /* line 59 */;
		echo '">Další</a>
    </li>

  </ul>
</nav>
</div>





  
 
  <!--Main layout-->
';
		$this->createTemplate('../footer.latte', $this->params, 'include')->renderToContentType('html') /* line 75 */;
		echo '</div>
';
	}
}
