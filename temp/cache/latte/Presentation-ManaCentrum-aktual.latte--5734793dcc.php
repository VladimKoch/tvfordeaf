<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\tvfordeaf\app\Presentation\ManaCentrum/aktual.latte */
final class Template_5734793dcc extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\tvfordeaf\\app\\Presentation\\ManaCentrum/aktual.latte';

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


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['lesson' => '12'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div class="container " style="margin-top: 200px; margin-bottom: 100px;">
       <div class="mb-3 border-2" style="margin-bottom:20px; border:1px solid grey; box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);
            -webkit-box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);
            -moz-box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);"><h1 style="color:blue" class="text-center">Sobotní škola</h1>
            <p class="text-center">Aktuání čtvrtletí</p>
        </div>

        

    <ul>
';
		foreach ($lessons as $lesson) /* line 12 */ {
			echo '        <li>
            <div class="d-flex align-items-center mb-2">
            <strong>';
			echo LR\Filters::escapeHtmlText($lesson['title']) /* line 15 */;
			echo '</strong><br>
            

';
			if (isset($lesson['pdf'])) /* line 18 */ {
				echo '                <a href="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($lesson['pdf'])) /* line 19 */;
				echo '" target="_blank" download>
                    <img src="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 20 */;
				echo '/uploads/img/pdf.png" width="50" height="50"><span style="color: #d32f2f;">PDF</span>
                </a>
';
			}
			echo "\n";
			if (isset($lesson['pptx'])) /* line 24 */ {
				echo '                <a href="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($lesson['pptx'])) /* line 25 */;
				echo '" target="_blank" download style="margin-left: 1em;">
                   <img src="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 26 */;
				echo '/uploads/img/pptx.png"width="50" height="50"> <span style="color: #fc7f03;">PPTX</span>
                </a>
';
			}
			if (isset($lesson['docx'])) /* line 29 */ {
				echo '                <a href="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($lesson['docx'])) /* line 30 */;
				echo '" target="_blank" download style="margin-left: 1em;">
                   <img src="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 31 */;
				echo '/uploads/img/docx.png"width="50" height="50"> <span style="color: #1976d2;">DOCX</span>
                </a>
';
			}
			if (isset($lesson['res_pdf'])) /* line 34 */ {
				echo '                <a href="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($lesson['res_pdf'])) /* line 35 */;
				echo '" target="_blank" download style="margin-left: 1em;">
                   <img src="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 36 */;
				echo '/uploads/img/pdf.png"width="50" height="50"> <span style="color: #d32f2f;">PDF</span>
                </a>
';
			}
			echo '            </div>
        </li>
';

		}

		echo '</ul>    


</div>';
	}
}
