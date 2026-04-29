<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\tvfordeaf\app\Presentation\FitCentrum/bozilekarna.latte */
final class Template_9a160f689d extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\tvfordeaf\\app\\Presentation\\FitCentrum/bozilekarna.latte';

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

		$this->renderBlock('title', get_defined_vars()) /* line 3 */;
		echo "\n";
		$this->renderBlock('content', get_defined_vars()) /* line 4 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['bylinka' => '25'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		$this->parentName = '../@layout.latte';
		return get_defined_vars();
	}


	/** {block title} on line 3 */
	public function blockTitle(array $ʟ_args): void
	{
		echo 'Bylinky';
	}


	/** {block content} on line 4 */
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
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:default')) /* line 12 */;
		echo '" class="text-decoration-none fw-bold " style="color:green;">Domů</a> 
            <i class="fa-solid fa-chevron-right text-muted mx-2" style="font-size: 0.8rem;"></i> 
            <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('FitCentrum:default')) /* line 14 */;
		echo '" class="text-decoration-none fw-bold "style="color:green;">FitCentrum</a> 
            <i class="fa-solid fa-chevron-right text-muted mx-2" style="font-size: 0.8rem;"></i> 
            <span class="text-muted fw-semibold">Boží lékárna</span>
        </div>

      <div class="border border-black-900 rounded overflow-hidden shadow-sm" style="height:70px;margin-bottom:20px; background: white;">
        <h1 style="color:green;font-size:1.5rem" class="text-center">Boží lékárna</h1>
            <p class="text-center" style="font-size:0.875rem">Přírodní pomoc</p></div>
            <!-- Post -->
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-5"> 
';
		foreach ($bylinky as $bylinka) /* line 25 */ {
			echo '		          <div>   
                <div class="col-12">
                    <div class="card-group">
                        <div class="card card__container border-0">
                            <article class="card__article">

                                
                                    <a href="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($bylinka->web_url)) /* line 32 */;
			echo '" class="fit-href" target="_blank">
                                        <img src="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 33 */;
			echo '/uploads/img/znak-zeleny.png" 
                                        style="position: absolute; top: 10px; right: 10px; z-index: 10; width: 50px; height: 50px;" 
                                        alt="Zelený znak">
                                        
                                    <img src="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 37 */;
			echo '/uploads/img/';
			echo LR\Filters::escapeHtmlAttr($bylinka->photo_url) /* line 37 */;
			echo '" class="card-img-top rounded-3 scale-down" alt="..." style="height: 250px; width: 100%; object-fit: cover;">

                                    <div class="card-body card__data" style="background: rgb(18, 134, 0); background: linear-gradient(0deg,rgba(18, 134, 0,1) 0%, rgb(62, 180, 12) 100%); box-shadow: 1px 3px 18px 0px rgba(255,255,255,0.75) inset; -webkit-box-shadow: 1px 3px 18px 0px rgba(255,255,255,0.75) inset; -moz-box-shadow: 1px 3px 18px 0px rgba(255,255,255,0.75) inset;">
                                        <span class="card__description">';
			echo LR\Filters::escapeHtmlText($bylinka->content) /* line 40 */;
			echo '</span>
                                        <h5 class="card__title card-title text-center" style="color:white">';
			echo LR\Filters::escapeHtmlText($bylinka->title) /* line 41 */;
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

		echo '		</div>

</div>

</div>
';
	}
}
