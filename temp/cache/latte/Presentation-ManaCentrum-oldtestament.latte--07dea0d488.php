<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\tvfordeaf\app\Presentation\ManaCentrum/oldtestament.latte */
final class Template_07dea0d488 extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\tvfordeaf\\app\\Presentation\\ManaCentrum/oldtestament.latte';

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
			foreach (array_intersect_key(['video' => '19'], $this->params) as $ʟ_v => $ʟ_l) {
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

    <div class="container px-4 py-5" style="margin-top: 50px; margin-bottom: 100px;">
    <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:default')) /* line 10 */;
		echo '"style="text-decoration:none; color:blue">Domů</a> <i class="fa-solid fa-arrow-right"></i> <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('ManaCentrum:default')) /* line 10 */;
		echo '"style="text-decoration:none; color:blue">ManaCentrum</a> <i class="fa-solid fa-arrow-right"></i> <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('ManaCentrum:biblestudium')) /* line 10 */;
		echo '"style="text-decoration:none; color:blue">Studium Bible</a>
        <div class="mb-3 border-2" style="height:70px;margin-bottom:20px; border:1px solid grey; box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);
              -webkit-box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);
              -moz-box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);"><h1 style="color:blue;font-size:1.5rem" class="text-center">Studium Bible</h1>
              <p class="text-center"style="font-size:0.875rem">Starý Zákon</p>
          </div>
            <!-- Post -->
            <div class="row g-4 py-5 row-cols-md-2 row-cols-lg-3"> 
          
';
		foreach ($videos as $video) /* line 19 */ {
			echo '		          <div>
              
              <div class="col-12">
                
                      <div class="card-group rounded-3">
                        <div class="card border-0 rounded-3">
                          
                            <a href="https://www.youtube.com/embed/';
			echo LR\Filters::escapeHtmlAttr($video->video_url) /* line 26 */;
			echo '" target="_blank">
                            <img src="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($video->jpg_url)) /* line 27 */;
			echo '" alt="';
			echo LR\Filters::escapeHtmlAttr($video->title) /* line 27 */;
			echo '" style="min-width:100%; height:200px; object-fit:cover;">
                            </a>
                         
                            
                        
                        </div>
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
		if ($page <= 1) /* line 43 */ {
			echo 'disabled';
		}
		echo '">
      <a class="page-link" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('this', ['page' => $page - 1])) /* line 44 */;
		echo '">Předchozí</a>
    </li>

';
		for ($i = 1;
		$i <= $pageCount;
		$i++) /* line 47 */ {
			echo '      <li class="page-item ';
			if ($i === $page) /* line 48 */ {
				echo 'active';
			}
			echo '">
        <a class="page-link" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('this', ['page' => $i])) /* line 49 */;
			echo '">';
			echo LR\Filters::escapeHtmlText($i) /* line 49 */;
			echo '</a>
      </li>
';

		}
		echo '
    <li class="page-item ';
		if ($page >= $pageCount) /* line 53 */ {
			echo 'disabled';
		}
		echo '">
      <a class="page-link" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('this', ['page' => $page + 1])) /* line 54 */;
		echo '">Další</a>
    </li>

  </ul>
</nav>
</div>


';
	}
}
