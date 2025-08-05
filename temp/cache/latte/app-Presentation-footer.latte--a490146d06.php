<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\tvfordeaf\app\Presentation\footer.latte */
final class Template_a490146d06 extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\tvfordeaf\\app\\Presentation\\footer.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo '<div class="footer" style="background: #2a359b;
background: linear-gradient(19deg,rgba(42, 53, 155, 1) 19%, rgba(159, 188, 227, 1) 45%, rgba(255, 255, 255, 1) 60%);">
        <p>&copy; 2025 TV for Deaf. All rights reserved.</p>
    </div>';
	}
}
