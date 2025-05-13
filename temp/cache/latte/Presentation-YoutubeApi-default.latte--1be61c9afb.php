<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\tvfordeaf\app\Presentation\YoutubeApi/default.latte */
final class Template_1be61c9afb extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\tvfordeaf\\app\\Presentation\\YoutubeApi/default.latte';

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

		echo "\n";
		$this->renderBlock('content', get_defined_vars()) /* line 2 */;
	}


	/** {block content} on line 2 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo "\n";
		if (isset($error)) /* line 4 */ {
			echo '    <p>';
			echo LR\Filters::escapeHtmlText($error) /* line 5 */;
			echo '</p>
';
		} else /* line 6 */ {
			echo '    <h1>';
			echo LR\Filters::escapeHtmlText($title) /* line 7 */;
			echo '</h1>
    <p>Zhlédnutí: ';
			echo LR\Filters::escapeHtmlText($views) /* line 8 */;
			echo '</p>
';
		}
		echo "\n";
	}
}
