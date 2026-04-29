<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\tvfordeaf\app\Presentation\FitCentrum/sekcerostlin.latte */
final class Template_0f574b72a7 extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\tvfordeaf\\app\\Presentation\\FitCentrum/sekcerostlin.latte';

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
            <span class="text-muted fw-semibold">Encyklopedie rostlin</span>
        </div>

      <div class="border border-black-900 rounded overflow-hidden shadow-sm" style="height:70px;margin-bottom:20px; background: white;">
        <h1 style="color:green;font-size:1.5rem" class="text-center">Encyklopedie léčivých Rostlin</h1>
            <p class="text-center" style="font-size:0.875rem">Bylinky pro různé potřeby</p></div>
            <!-- Post -->
            <div class="row row-cols-2 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 g-3">
                <div class="col-12">
                    <div class="card-group">
                        <div class="card card__container border-0">
                            <article class="card__article">
                                    <a href="https://hladwork.papet.cz/public/zk/titulka/titulka_Page_1.html" class="fit-href" target="_blank">
                                        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 31 */;
		echo '/uploads/img/znak-modry.png" 
                                        style="position: absolute; top: 10px; right: 10px; z-index: 10; width: 50px; height: 50px;" 
                                        alt="Zelený znak">
                                        
                                    <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 35 */;
		echo '/uploads/img/encyklopedie.jpeg" class="card-img-top rounded-3 scale-down" alt="..." style="height: 250px; width: 100%; object-fit: cover; object-position: top;">


                                            
                                    </a>
                                
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card-group">
                        <div class="card card__container border-0">
                            <article class="card__article">

                                    <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('FitCentrum:sekceInfekce')) /* line 50 */;
		echo '" class="fit-href">
                                        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 51 */;
		echo '/uploads/img/znak-modry.png" 
                                        style="position: absolute; top: 10px; right: 10px; z-index: 10; width: 50px; height: 50px;" 
                                        alt="Zelený znak">
                                        
                                    <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 55 */;
		echo '/uploads/img/infekce.png" class="card-img-top rounded-3 scale-down" alt="..." style="height: 250px; width: 100%; object-fit: center;">
  
                                    </a>
                                
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card-group">
                        <div class="card  card__container border-0">
                            <article class="card__article">

                                    <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('FitCentrum:sekceKrk')) /* line 68 */;
		echo '" class="fit-href">
                                        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 69 */;
		echo '/uploads/img/znak-modry.png" 
                                        style="position: absolute; top: 10px; right: 10px; z-index: 10; width: 50px; height: 50px;" 
                                        alt="Zelený znak">
                                    <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 72 */;
		echo '/uploads/img/krk.png" class="card-img-top rounded-3 scale-down" alt="..." style="height: 250px; width: 100%; object-fit: center;">
     
                                    </a>
                                
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card-group">
                        <div class="card  card__container border-0">
                            <article class="card__article">
                                    <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('FitCentrum:sekceNerv')) /* line 84 */;
		echo '" class="fit-href">
                                        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 85 */;
		echo '/uploads/img/znak-modry.png" 
                                        style="position: absolute; top: 10px; right: 10px; z-index: 10; width: 50px; height: 50px;" 
                                        alt="Zelený znak">
                                        
                                    <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 89 */;
		echo '/uploads/img/nerv.png" class="card-img-top rounded-3 scale-down" alt="..." style="height: 250px; width: 100%; object-fit: center;">
    
                                    </a>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card-group">
                        <div class="card  card__container border-0">
                            <article class="card__article">

                                
                                    <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('FitCentrum:sekceOko')) /* line 102 */;
		echo '" class="fit-href">
                                        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 103 */;
		echo '/uploads/img/znak-modry.png" 
                                        style="position: absolute; top: 10px; right: 10px; z-index: 10; width: 50px; height: 50px;" 
                                        alt="Zelený znak">
                                        
                                    <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 107 */;
		echo '/uploads/img/oko.png" class="card-img-top rounded-3 scale-down" alt="..." style="height: 250px; width: 100%; object-fit: center;">

                                    
                                            
                                    </a>
                                
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card-group">
                        <div class="card card__container border-0">
                            <article class="card__article">

                                
                                    <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('FitCentrum:sekceTepny')) /* line 123 */;
		echo '" class="fit-href">
                                        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 124 */;
		echo '/uploads/img/znak-modry.png" 
                                        style="position: absolute; top: 10px; right: 10px; z-index: 10; width: 50px; height: 50px;" 
                                        alt="Zelený znak">
                                        
                                    <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 128 */;
		echo '/uploads/img/tepna.png" class="card-img-top rounded-3 scale-down" alt="..." style="height: 250px; width: 100%; object-fit: center;">

                                    
                                            
                                    </a>
                                
                            </article>
                        </div>
                    </div>
                </div>
		</div>

</div>

</div>
';
	}
}
