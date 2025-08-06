<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\tvfordeaf\app\Presentation\ManaCentrum/aktual.latte */
final class Template_950dcf820d extends Latte\Runtime\Template
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
			foreach (array_intersect_key(['lesson' => '25, 89', 'docLink' => '35', 'jpgLink' => '90'], $this->params) as $ʟ_v => $ʟ_l) {
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

		echo '
<div class="container " style="margin-top: 200px; margin-bottom: 100px;width:60%;">
    <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:default')) /* line 4 */;
		echo '">Domů</a> <i class="fa-solid fa-arrow-right"></i> <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('ManaCentrum:default')) /* line 4 */;
		echo '">ManaCentrum</a> <i class="fa-solid fa-arrow-right"></i> <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Manacentrum:skola')) /* line 4 */;
		echo '">Sobotní škola</a>
       <div class="mb-3 border-2" style="height:70px;margin-bottom:20px; border:1px solid grey; box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);
            -webkit-box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);
            -moz-box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);"><h1 style="color:blue;font-size:1.5rem" class="text-center">Sobotní škola</h1>
            <p class="text-center"style="font-size:0.875rem">Aktuání čtvrtletí</p>
        </div>


    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Název lekce</th>
                <th>Datum</th>
                <th>Prezentace PDF</th>
                <th>Prezentace PowerPoint</th>
                <th>Souhrn Word</th>
                <th>Souhrn PDF</th>
            </tr>
        </thead>
        <tbody>
';
		foreach ($lessons as $lesson) /* line 25 */ {
			echo '                <tr>
                    <td><strong>';
			echo LR\Filters::escapeHtmlText($lesson['title']) /* line 28 */;
			echo '</strong></td>
                    <td><strong>';
			echo LR\Filters::escapeHtmlText($lesson['date']) /* line 30 */;
			echo '</strong></td>
                   
                    <td>
';
			if (!empty($lesson['documents'])) /* line 34 */ {
				foreach ($lesson['documents'] as $docLink) /* line 35 */ {
					if (str_contains($docLink, 'Zalm')) /* line 36 */ {
						echo '                                <a href="';
						echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($docLink)) /* line 37 */;
						echo '" style="text-decoration:none"  target="_blank" download>
                                    <img src="';
						echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 38 */;
						echo '/uploads/img/pdf.png" width="30" height="30">
                                    <span style="color: #d32f2f;">PDF</span>
                                </a>
';
					}

				}

			}
			if (isset($lesson['documents']['pdf'])) /* line 45 */ {
				echo '                            <a href="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($lesson['documents']['pdf'])) /* line 46 */;
				echo '" style="text-decoration:none" target="_blank" download>
                                <img src="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 47 */;
				echo '/uploads/img/pdf.png" width="30" height="30">
                                <span style="color: #d32f2f;">PDF</span>
                            </a>
';
			}
			echo '                    </td>

                    <td>
';
			if (isset($lesson['documents']['pptx'])) /* line 55 */ {
				echo '                            <a href="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($lesson['documents']['pptx'])) /* line 56 */;
				echo '" style="text-decoration:none" target="_blank" download>
                                <img src="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 57 */;
				echo '/uploads/img/pptx.png" width="30" height="30">
                                <span style="color: #fc7f03;">PPTX</span>
                            </a>
';
			}
			echo '                    </td>

                    <td>
';
			if (isset($lesson['documents']['docx'])) /* line 65 */ {
				echo '                            <a href="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($lesson['documents']['docx'])) /* line 66 */;
				echo '" style="text-decoration:none" target="_blank" download>
                                <img src="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 67 */;
				echo '/uploads/img/docx.png" width="30" height="30">
                                <span style="color: #1976d2;">DOCX</span>
                            </a>
';
			}
			echo '                    </td>

                    <td>
';
			if (isset($lesson['documents']['res_pdf'])) /* line 75 */ {
				echo '                            <a href="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($lesson['documents']['res_pdf'])) /* line 76 */;
				echo '" style="text-decoration:none" target="_blank" download>
                                <img src="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 77 */;
				echo '/uploads/img/pdf.png" width="30" height="30">
                                <span style="color: #d32f2f;">PDF</span>
                            </a>
';
			}
			echo '                    </td>
                </tr>
';

		}

		echo '        </tbody>
    </table>
        <h1 class="text-center" style="color:blue">Obrázky k lekcím</h1>
    <div class="row g-4 py-5 row-cols-2 row-cols-lg-4">
';
		foreach ($lessons as $lesson) /* line 89 */ {
			foreach ($lesson['documents'] as $jpgLink) /* line 90 */ {
				if (str_ends_with($jpgLink, '.jpg')) /* line 91 */ {
					echo '                    <div class="col">
                        <a href="';
					echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($jpgLink)) /* line 93 */;
					echo '">
                            <img src="';
					echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($jpgLink)) /* line 94 */;
					echo '" alt="Image" style="max-width: 100%; height: auto; margin-bottom: 20px;">
                        </a>
                    </div>
';
				}

			}


		}

		echo '    </div>
</div>
        
';
	}
}
