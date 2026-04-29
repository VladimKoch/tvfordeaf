<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\tvfordeaf\app\Presentation\ManaCentrum/skola.latte */
final class Template_a1329dd39a extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\tvfordeaf\\app\\Presentation\\ManaCentrum/skola.latte';

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
		echo 'Sobotní škola';
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
        
        <div class="mb-4">
            <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:default')) /* line 10 */;
		echo '" class="text-decoration-none fw-bold" style="color: blue;">Domů</a> 
            <i class="fa-solid fa-chevron-right text-muted mx-2" style="font-size: 0.8rem;"></i> 
            <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('ManaCentrum:default')) /* line 12 */;
		echo '" class="text-decoration-none fw-bold" style="color: blue;">ManaCentrum</a> 
            <i class="fa-solid fa-chevron-right text-muted mx-2" style="font-size: 0.8rem;"></i> 
            <span class="text-muted fw-semibold">Sobotní škola</span>
        </div>

        <div class="bg-white border-0 shadow-sm rounded-4 mb-5 py-3">
            <h1 style="color: blue; font-size: 1.5rem;" class="text-center mt-2 mb-1 fw-bold">Sobotní škola</h1>
            <p class="text-center text-muted mb-2" style="font-size: 0.875rem;">Archív a aktuální čtvrtletí</p>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 g-4 justify-content-center">
            
            <div class="col">
                <a href="https://onedrive.live.com/?redeem=aHR0cHM6Ly8xZHJ2Lm1zL3UvcyFBc1pKSDdpcGtrcVdwT05YU0lUVHMtRVVkZ0p5R2c%5FZT1WTlFVMUs&id=964A92A9B81F49C6%21602583&cid=964A92A9B81F49C6" target="_blank" class="text-decoration-none d-block h-100">
                    <div class="bg-white border-0 shadow-sm rounded-4 p-4 p-lg-5 text-center h-100 d-flex flex-column align-items-center justify-content-center">
                        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 30 */;
		echo '/uploads/img/archive.png" alt="Archív" class="img-fluid mb-4" style="height: 120px; object-fit: contain;">
                        <h4 class="fw-bold mb-0 "style="color: blue;">Archív</h4>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('ManaCentrum:aktual')) /* line 38 */;
		echo '" class="text-decoration-none d-block h-100">
                    <div class="bg-white border-0 shadow-sm rounded-4 p-4 p-lg-5 text-center h-100 d-flex flex-column align-items-center justify-content-center">
                        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 40 */;
		echo '/uploads/img/check.png" alt="Aktuální čtvrtletí" class="img-fluid mb-4" style="height: 120px; object-fit: contain;">
                        <h4 class="fw-bold mb-0 "style="color: blue;">Aktuální čtvrtletí</h4>
                    </div>
                </a>
            </div>

        </div>

    </div>
</div>

';
	}
}
