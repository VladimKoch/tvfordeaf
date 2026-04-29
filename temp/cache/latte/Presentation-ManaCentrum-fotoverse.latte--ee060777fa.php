<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\tvfordeaf\app\Presentation\ManaCentrum/fotoverse.latte */
final class Template_ee060777fa extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\tvfordeaf\\app\\Presentation\\ManaCentrum/fotoverse.latte';

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

		$this->renderBlock('title', get_defined_vars()) /* line 1 */;
		echo "\n";
		$this->renderBlock('content', get_defined_vars()) /* line 2 */;
	}


	/** {block title} on line 1 */
	public function blockTitle(array $ʟ_args): void
	{
		echo 'Fotoverše';
	}


	/** {block content} on line 2 */
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
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:default')) /* line 10 */;
		echo '" class="text-decoration-none fw-bold"style="color:blue;">Domů</a> 
            <i class="fa-solid fa-chevron-right text-muted mx-2;" style="font-size: 0.8rem;"></i> 
            <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('ManaCentrum:default')) /* line 12 */;
		echo '" class="text-decoration-none fw-bold"style="color:blue;">ManaCentrum</a> 
            <i class="fa-solid fa-chevron-right text-muted mx-2;" style="font-size: 0.8rem;"></i> 
            <span class="text-muted fw-semibold">Fotoverše</span>
        </div>

        <div class="border border-black-900 rounded overflow-hidden shadow-sm" style="height:70px;margin-bottom:20px; background: white;">
            <h1 style="color:blue;font-size:1.5rem" class="text-center mt-2 mb-0">Fotoverše</h1>
            <p class="text-center text-muted mt-0" style="font-size:0.875rem">Verš na každý den</p>
        </div>

';
		if ($fotovers) /* line 24 */ {
			echo '            <div class="bg-white border-0 shadow-sm rounded-4 overflow-hidden mb-5">
                <div class="p-4 p-md-5 text-center">
                    
                    <h2 class="fw-bold mb-1" style="color: blue;">Dnešní zamyšlení</h2>
                    <p class="text-muted fw-semibold mb-4 fs-5">';
			echo LR\Filters::escapeHtmlText(($this->filters->date)($fotovers->display_date, 'j. n. Y')) /* line 32 */;
			echo '</p>

                    <a href="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 35 */;
			echo '/images/verses/';
			echo LR\Filters::escapeHtmlAttr($fotovers->image_path) /* line 35 */;
			echo '" target="_blank" class="d-block mb-4">
                    <img src="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 36 */;
			echo '/images/verses/';
			echo LR\Filters::escapeHtmlAttr($fotovers->image_path) /* line 36 */;
			echo '" alt="Fotoverš pro dnešní den" class="img-fluid rounded-3 shadow-sm d-block mx-auto mb-4" style="max-height: 70vh; object-fit: contain;">
                    </a>
                    <blockquote class="blockquote fst-italic text-secondary mb-0">
                    </blockquote>
                    
                </div>
            </div>
';
		} else /* line 45 */ {
			echo '            <div class="bg-white border-0 shadow-sm rounded-4 mt-4">
                <div class="py-5 text-center text-muted">
                    <i class="fa-regular fa-image fa-3x mb-3" style="color: #dee2e6;"></i>
                    <h5 class="fw-semibold text-dark">Zatím tu nejsou žádné fotoverše</h5>
                    <p class="mb-0">Zkuste to prosím o něco později.</p>
                </div>
            </div>
';
		}
		echo '
    </div>
</div>

';
	}
}
