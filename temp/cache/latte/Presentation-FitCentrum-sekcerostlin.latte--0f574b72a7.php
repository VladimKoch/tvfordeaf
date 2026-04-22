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
		echo 'Sekce Bylin';
	}


	/** {block content} on line 4 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '
    <div class="container" style="margin-top: 50px; margin-bottom: 100px;">
    <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:default')) /* line 8 */;
		echo '" style="text-decoration:none; color:green">Domů</a> <i class="fa-solid fa-arrow-right"></i> <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('FitCentrum:default')) /* line 8 */;
		echo '"style="text-decoration:none; color:green">FitCentrum</a>
     <div class="mb-3 border-2" style="height:70px;margin-bottom:20px; border:1px solid grey; box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);
        -webkit-box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);
        -moz-box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);"><h1 style="color:green; font-size:1.5rem" class="text-center">Encyklopedie léčivých rostlin</h1>
        <p class="text-center" style="font-size:0.875rem">Zde najdete bylinky pro různé potřeby</p></div>
            <!-- Post -->
            <div class="row row-cols-2 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 g-3">
                <div class="col-12">
                    <div class="card-group">
                        <div class="card card__container border-0">
                            <article class="card__article">
                                    <a href="https://hladwork.papet.cz/public/zk/titulka/titulka_Page_1.html" class="fit-href">
                                        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 21 */;
		echo '/uploads/img/znak-modry.png" 
                                        style="position: absolute; top: 10px; right: 10px; z-index: 10; width: 50px; height: 50px;" 
                                        alt="Zelený znak">
                                        
                                    <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 25 */;
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
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('FitCentrum:sekceInfekce')) /* line 40 */;
		echo '" class="fit-href">
                                        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 41 */;
		echo '/uploads/img/znak-modry.png" 
                                        style="position: absolute; top: 10px; right: 10px; z-index: 10; width: 50px; height: 50px;" 
                                        alt="Zelený znak">
                                        
                                    <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 45 */;
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
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('FitCentrum:sekceKrk')) /* line 58 */;
		echo '" class="fit-href">
                                        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 59 */;
		echo '/uploads/img/znak-modry.png" 
                                        style="position: absolute; top: 10px; right: 10px; z-index: 10; width: 50px; height: 50px;" 
                                        alt="Zelený znak">
                                    <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 62 */;
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
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('FitCentrum:sekceNerv')) /* line 74 */;
		echo '" class="fit-href">
                                        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 75 */;
		echo '/uploads/img/znak-modry.png" 
                                        style="position: absolute; top: 10px; right: 10px; z-index: 10; width: 50px; height: 50px;" 
                                        alt="Zelený znak">
                                        
                                    <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 79 */;
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
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('FitCentrum:sekceOko')) /* line 92 */;
		echo '" class="fit-href">
                                        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 93 */;
		echo '/uploads/img/znak-modry.png" 
                                        style="position: absolute; top: 10px; right: 10px; z-index: 10; width: 50px; height: 50px;" 
                                        alt="Zelený znak">
                                        
                                    <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 97 */;
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
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('FitCentrum:sekceTepny')) /* line 113 */;
		echo '" class="fit-href">
                                        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 114 */;
		echo '/uploads/img/znak-modry.png" 
                                        style="position: absolute; top: 10px; right: 10px; z-index: 10; width: 50px; height: 50px;" 
                                        alt="Zelený znak">
                                        
                                    <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 118 */;
		echo '/uploads/img/tepna.png" class="card-img-top rounded-3 scale-down" alt="..." style="height: 250px; width: 100%; object-fit: center;">

                                    
                                            
                                    </a>
                                
                            </article>
                        </div>
                    </div>
                </div>
		</div>

</div>

';
	}
}
