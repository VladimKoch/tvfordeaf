<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\tvfordeaf\app\Presentation\ManaCentrum/pisne.latte */
final class Template_e5a24e1092 extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\tvfordeaf\\app\\Presentation\\ManaCentrum/pisne.latte';

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
			foreach (array_intersect_key(['pisen' => '29'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}


	/** {block title} on line 2 */
	public function blockTitle(array $ʟ_args): void
	{
		echo 'Písně';
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
            <span class="text-muted fw-semibold">Písně</span>
        </div>

      <div class="border border-black-900 rounded overflow-hidden shadow-sm" style="height:70px;margin-bottom:20px; background: white;">
        <h1 style="color:blue;font-size:1.5rem" class="text-center">Písně</h1>
            <p class="text-center" style="font-size:0.875rem">Písně o naději</p></div>
        <!-- Post -->
        <div class="row g-4 py-4 row-cols-2 row-cols-md-2 row-cols-lg-3">

';
		foreach ($pisne as $pisen) /* line 29 */ {
			echo '            <div class="col">

                <div class="video-card">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/';
			echo LR\Filters::escapeHtmlAttr($pisen->video_url) /* line 33 */;
			echo '?controls=0&rel=0&modestbranding=1"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>

                    <div class="video-info">
                        <p class="video-title" title="';
			echo LR\Filters::escapeHtmlAttr($pisen->title) /* line 40 */;
			echo '">';
			echo LR\Filters::escapeHtmlText($pisen->title) /* line 40 */;
			echo '</p>
                    </div>
                </div>

            </div>
';

		}

		echo '        </div>

    </div><br><br>
    <nav aria-label="Jednoduchá stránkování" class="d-flex justify-content-center">
        <ul class="pagination">

            <li class="page-item ';
		if ($page <= 1) /* line 51 */ {
			echo 'disabled';
		}
		echo '">
                <a class="page-link" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('this', ['page' => $page - 1])) /* line 52 */;
		echo '">Předchozí</a>
            </li>

';
		for ($i = 1;
		$i <= $pageCount;
		$i++) /* line 55 */ {
			echo '                <li class="page-item ';
			if ($i === $page) /* line 56 */ {
				echo 'active';
			}
			echo '">
                    <a class="page-link" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('this', ['page' => $i])) /* line 57 */;
			echo '">';
			echo LR\Filters::escapeHtmlText($i) /* line 57 */;
			echo '</a>
                </li>
';

		}
		echo '
            <li class="page-item ';
		if ($page >= $pageCount) /* line 61 */ {
			echo 'disabled';
		}
		echo '">
                <a class="page-link" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('this', ['page' => $page + 1])) /* line 62 */;
		echo '">Další</a>
            </li>

        </ul>
    </nav>

    </div>
';
	}
}
