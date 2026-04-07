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

 <div class="container px-4 py-5" style="margin-top: 50px; margin-bottom: 100px;">
    <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:default')) /* line 6 */;
		echo '"style="text-decoration:none; color:blue">Domů</a> <i class="fa-solid fa-arrow-right"></i> <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('ManaCentrum:default')) /* line 6 */;
		echo '"style="text-decoration:none; color:blue">ManaCentrum</a> <i class="fa-solid fa-arrow-right"></i> <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('ManaCentrum:fotoverse')) /* line 6 */;
		echo '"style="text-decoration:none; color:blue">Fotoverše</a>
        <div class="mb-3 border-2" style="height:70px;margin-bottom:20px; border:1px solid grey; box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);
              -webkit-box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);
              -moz-box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);"><h1 style="color:blue;font-size:1.5rem" class="text-center">Fotoverše</h1>
              <p class="text-center"style="font-size:0.875rem">Biblický verš na každý den</p>
          </div>

';
		if ($fotovers) /* line 13 */ {
			echo '            <div class="fotoverse-container">
                <h4 class="text-center mb-4">Fotoverš pro dnešní den ';
			echo LR\Filters::escapeHtmlText(($this->filters->date)($fotovers->display_date, 'j. n. Y')) /* line 15 */;
			echo '</h4>
                <img src="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 16 */;
			echo '/images/verses/';
			echo LR\Filters::escapeHtmlAttr($fotovers->image_path) /* line 16 */;
			echo '" alt="Fotoverš pro dnešní den" style="width:60%;" class="d-block mx-auto mb-4">
                <blockquote class="verse-text">
                </blockquote>
            </div>
';
		} else /* line 22 */ {
			echo '            <p>Zatím tu nejsou žádné fotoverše.</p>
';
		}
		echo '</div>

';
	}
}
