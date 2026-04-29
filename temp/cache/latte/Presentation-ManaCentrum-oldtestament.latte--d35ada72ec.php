<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\tvfordeaf\app\Presentation\ManaCentrum/oldtestament.latte */
final class Template_d35ada72ec extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\tvfordeaf\\app\\Presentation\\ManaCentrum/oldtestament.latte';

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
			foreach (array_intersect_key(['old' => '31'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}


	/** {block title} on line 2 */
	public function blockTitle(array $ʟ_args): void
	{
		echo 'Starý zákon';
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
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:default')) /* line 15 */;
		echo '" class="text-decoration-none fw-bold " style="color:blue;">Domů</a> 
            <i class="fa-solid fa-chevron-right text-muted mx-2" style="font-size: 0.8rem;"></i> 
            <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('ManaCentrum:default')) /* line 17 */;
		echo '" class="text-decoration-none fw-bold "style="color:blue;">ManaCentrum</a> 
            <i class="fa-solid fa-chevron-right text-muted mx-2" style="font-size: 0.8rem;"></i> 
            <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('ManaCentrum:biblestudium')) /* line 19 */;
		echo '" class="text-decoration-none fw-bold "style="color:blue;">Studium Bible</a> 
            <i class="fa-solid fa-chevron-right text-muted mx-2" style="font-size: 0.8rem;"></i> 
            <span class="text-muted fw-semibold">Stará Smlouva</span>
        </div>

      <div class="border border-black-900 rounded overflow-hidden shadow-sm" style="height:70px;margin-bottom:20px; background: white;">
        <h1 style="color:blue;font-size:1.5rem" class="text-center">Stará Smlouva</h1>
            <p class="text-center" style="font-size:0.875rem">Studium Staré smlouvy</p></div>
            <!-- Post -->
            <div class="row g-4 py-5 row-cols-md-2 row-cols-lg-3"> 
          
';
		foreach ($olds as $old) /* line 31 */ {
			echo '		          <div>
              
              <div class="col-12">
                
                      <div class="card-group rounded-3">
                        <div class="card border-0 rounded-3">
                          
                            <a href="https://www.youtube.com/embed/';
			echo LR\Filters::escapeHtmlAttr($old->video_url) /* line 38 */;
			echo '" target="_blank">
                            <img src="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($old->jpg_url)) /* line 39 */;
			echo '" alt="';
			echo LR\Filters::escapeHtmlAttr($old->title) /* line 39 */;
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
		if ($page <= 1) /* line 55 */ {
			echo 'disabled';
		}
		echo '">
      <a class="page-link" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('this', ['page' => $page - 1])) /* line 56 */;
		echo '">Předchozí</a>
    </li>

';
		for ($i = 1;
		$i <= $pageCount;
		$i++) /* line 59 */ {
			echo '      <li class="page-item ';
			if ($i === $page) /* line 60 */ {
				echo 'active';
			}
			echo '">
        <a class="page-link" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('this', ['page' => $i])) /* line 61 */;
			echo '">';
			echo LR\Filters::escapeHtmlText($i) /* line 61 */;
			echo '</a>
      </li>
';

		}
		echo '
    <li class="page-item ';
		if ($page >= $pageCount) /* line 65 */ {
			echo 'disabled';
		}
		echo '">
      <a class="page-link" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('this', ['page' => $page + 1])) /* line 66 */;
		echo '">Další</a>
    </li>

  </ul>
</nav>
</div>


</div>
';
	}
}
