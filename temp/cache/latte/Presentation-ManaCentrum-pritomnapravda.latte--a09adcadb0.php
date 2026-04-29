<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\tvfordeaf\app\Presentation\ManaCentrum/pritomnapravda.latte */
final class Template_a09adcadb0 extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\tvfordeaf\\app\\Presentation\\ManaCentrum/pritomnapravda.latte';

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
			foreach (array_intersect_key(['video' => '25'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}


	/** {block title} on line 2 */
	public function blockTitle(array $ʟ_args): void
	{
		echo 'Přítomná pravda';
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
            <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('ManaCentrum:default')) /* line 13 */;
		echo '" class="text-decoration-none fw-bold "style="color:blue;">ManaCentrum</a> 
            <i class="fa-solid fa-chevron-right text-muted mx-2" style="font-size: 0.8rem;"></i> 
            <span class="text-muted fw-semibold">Přítomná pravda</span>
        </div>

      <div class="border border-black-900 rounded overflow-hidden shadow-sm" style="height:70px;margin-bottom:20px; background: white;">
        <h1 style="color:blue;font-size:1.5rem" class="text-center">Přítomná pravda</h1>
            <p class="text-center" style="font-size:0.875rem">Poselství pro aktuální čas</p></div>
              <!-- Post -->
              <div class="row g-4 py-5 row-cols-2 row-cols-lg-4"> 
            
';
		foreach ($videos as $video) /* line 25 */ {
			echo '                  <div class="col">             
                    <div class="">               
                          <div class="video-card">
                            <div class="ratio ratio-16x9">
                              <!--This is the video embed section-->

                              <a href="https://www.youtube.com/embed/';
			echo LR\Filters::escapeHtmlAttr($video->video_url) /* line 31 */;
			echo '" target="_blank">
                              <img src="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 32 */;
			echo '/uploads/pravda/';
			echo LR\Filters::escapeHtmlAttr($video->jpg) /* line 32 */;
			echo '" alt="';
			echo LR\Filters::escapeHtmlAttr($video->title) /* line 32 */;
			echo '" style="width: 100%; height: 100%; object-fit: cover;">
                              </a>
                            </div>
                            <div class="video-info">
                            <p class="video-title" title="';
			echo LR\Filters::escapeHtmlAttr($video->title) /* line 36 */;
			echo '">';
			echo LR\Filters::escapeHtmlText($video->title) /* line 36 */;
			echo '</p>
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
		if ($page <= 1) /* line 54 */ {
			echo 'disabled';
		}
		echo '">
              <a class="page-link" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('this', ['page' => $page - 1])) /* line 55 */;
		echo '">Předchozí</a>
              </li>

';
		for ($i = 1;
		$i <= $pageCount;
		$i++) /* line 58 */ {
			echo '              <li class="page-item ';
			if ($i === $page) /* line 59 */ {
				echo 'active';
			}
			echo '">
                  <a class="page-link" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('this', ['page' => $i])) /* line 60 */;
			echo '">';
			echo LR\Filters::escapeHtmlText($i) /* line 60 */;
			echo '</a>
              </li>
';

		}
		echo '
              <li class="page-item ';
		if ($page >= $pageCount) /* line 64 */ {
			echo 'disabled';
		}
		echo '">
              <a class="page-link" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('this', ['page' => $page + 1])) /* line 65 */;
		echo '">Další</a>
              </li>
          </ul>
      </nav>
  </div>

</div>
';
	}
}
