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
			foreach (array_intersect_key(['video' => '18'], $this->params) as $ʟ_v => $ʟ_l) {
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

    <div class="container px-4 py-5" style="margin-top: 150px; margin-bottom: 100px;">
        <div class="mb-3 border-2" style="margin-bottom:20px; border:1px solid grey; box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);
              -webkit-box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);
              -moz-box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);"><h1 style="color:blue" class="text-center">Kázání</h1>
              <p class="text-center">Biblická zamyšlení o Bohu</p>
          </div>
            <!-- Post -->
            <div class="row g-4 py-5 row-cols-2 row-cols-lg-4"> 
          
';
		foreach ($videos as $video) /* line 18 */ {
			echo '		          <div>
              
              <div class="col-12">
                
                      <div class="card-group">
                        <div class="card border-0">
                        <iframe width="100%" height="200px" src="https://www.youtube.com/embed/';
			echo LR\Filters::escapeHtmlAttr($video->video_url) /* line 24 */;
			echo '" frameborder="0" allowfullscreen></iframe>
                        
                        </div>
                        <p class="text-center">';
			echo LR\Filters::escapeHtmlText($video->title) /* line 27 */;
			echo '</p>
                  </div>
                </div>
            </div>
';

		}

		echo ' 
			</div>
    <nav aria-label="Jednoduchá stránkování" class="d-flex justify-content-center">
  <ul class="pagination">

    <li class="page-item ';
		if ($page <= 1) /* line 36 */ {
			echo 'disabled';
		}
		echo '">
      <a class="page-link" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('this', ['page' => $page - 1])) /* line 37 */;
		echo '">Předchozí</a>
    </li>

';
		for ($i = 1;
		$i <= $pageCount;
		$i++) /* line 40 */ {
			echo '      <li class="page-item ';
			if ($i === $page) /* line 41 */ {
				echo 'active';
			}
			echo '">
        <a class="page-link" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('this', ['page' => $i])) /* line 42 */;
			echo '">';
			echo LR\Filters::escapeHtmlText($i) /* line 42 */;
			echo '</a>
      </li>
';

		}
		echo '
    <li class="page-item ';
		if ($page >= $pageCount) /* line 46 */ {
			echo 'disabled';
		}
		echo '">
      <a class="page-link" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('this', ['page' => $page + 1])) /* line 47 */;
		echo '">Další</a>
    </li>

  </ul>
</nav>
</div>


';
	}
}
