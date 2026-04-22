<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\tvfordeaf\app\Presentation\FitCentrum/sekceInfekce.latte */
final class Template_1a13270511 extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\tvfordeaf\\app\\Presentation\\FitCentrum/sekceInfekce.latte';

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
			foreach (array_intersect_key(['post' => '15'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		$this->parentName = '../@layout.latte';
		return get_defined_vars();
	}


	/** {block title} on line 3 */
	public function blockTitle(array $ʟ_args): void
	{
		echo 'Proti Infekci';
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
		echo '"style="text-decoration:none; color:green">FitCentrum</a> <i class="fa-solid fa-arrow-right"></i> <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('FitCentrum:sekcerostlin')) /* line 8 */;
		echo '"style="text-decoration:none; color:green">Encyklopedie rostlin</a>
     <div class="mb-3 border-2" style="height:70px;margin-bottom:20px; border:1px solid grey; box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);
        -webkit-box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);
        -moz-box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);"><h1 style="color:green; font-size:1.5rem" class="text-center">Sekce rostlin proti infekcím</h1>
        <p class="text-center" style="font-size:0.875rem">Zde najdete Bylinky</p></div>
            <!-- Post -->
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-5"> 
';
		foreach ($posts as $post) /* line 15 */ {
			echo '		          <div>   
                <div class="col-12">
                    <div class="card-group">
                        <div class="card card-fit card__container border-0">
                            <article class="card__article">

                                
                                    <a href="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($post->web_url)) /* line 22 */;
			echo '" class="fit-href" target="_blank">
                                        <img src="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 23 */;
			echo '/uploads/img/znak-zeleny.png" 
                                        style="position: absolute; top: 10px; right: 10px; z-index: 10; width: 50px; height: 50px;" 
                                        alt="Zelený znak">
                                        
                                    <img src="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 27 */;
			echo '/uploads/img/';
			echo LR\Filters::escapeHtmlAttr($post->photo_url) /* line 27 */;
			echo '" class="card-img-top rounded-3 scale-down" alt="..." style="height: 250px; width: 100%; object-fit: cover;">

                                    <div class="card-body card__data" style="background: rgb(18, 134, 0); background: linear-gradient(0deg,rgba(18, 134, 0,1) 0%, rgb(62, 180, 12) 100%); box-shadow: 1px 3px 18px 0px rgba(255,255,255,0.75) inset; -webkit-box-shadow: 1px 3px 18px 0px rgba(255,255,255,0.75) inset; -moz-box-shadow: 1px 3px 18px 0px rgba(255,255,255,0.75) inset;">
                                        <span class="card__description">';
			echo LR\Filters::escapeHtmlText($post->content) /* line 30 */;
			echo '</span>
                                        <h5 class="card__title card-title text-center" style="color:white">';
			echo LR\Filters::escapeHtmlText($post->title) /* line 31 */;
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

';
	}
}
