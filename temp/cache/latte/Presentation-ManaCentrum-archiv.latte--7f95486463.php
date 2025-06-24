<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\tvfordeaf\app\Presentation\ManaCentrum/archiv.latte */
final class Template_7f95486463 extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\tvfordeaf\\app\\Presentation\\ManaCentrum/archiv.latte';

	public const Blocks = [
		['content' => 'blockContent'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		echo '<div class="container " style="margin-top: 200px; margin-bottom: 100px;">
       <div class="mb-3 border-2" style="margin-bottom:20px; border:1px solid grey; box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);
            -webkit-box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);
            -moz-box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);"><h1 style="color:blue" class="text-center">Sobotní škola</h1>
            <p class="text-center">Archív sobotní školy</p>
        </div>
</div>
';
	}
}
