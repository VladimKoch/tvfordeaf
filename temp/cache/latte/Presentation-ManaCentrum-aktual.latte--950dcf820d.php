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
			foreach (array_intersect_key(['lesson' => '28, 84', 'docLink' => '34', 'jpgLink' => '85'], $this->params) as $ʟ_v => $ʟ_l) {
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
<div class="container " style="margin-top: 50px; margin-bottom: 100px;width:60%;">
    <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:default')) /* line 4 */;
		echo '"style="text-decoration:none; color:blue">Domů</a> <i class="fa-solid fa-arrow-right"></i> <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('ManaCentrum:default')) /* line 4 */;
		echo '"style="text-decoration:none; color:blue">ManaCentrum</a> <i class="fa-solid fa-arrow-right"></i> <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Manacentrum:skola')) /* line 4 */;
		echo '"style="text-decoration:none; color:blue">Sobotní škola</a>
       <div class="mb-3 border-2" style="height:70px;margin-bottom:20px; border:1px solid grey; box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);
            -webkit-box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);
            -moz-box-shadow: 10px 10px 18px -10px rgba(27,27,27,0.75);"><h1 style="color:blue;font-size:1.5rem" class="text-center">Sobotní škola</h1>
            <p class="text-center"style="font-size:0.875rem">Aktuání čtvrtletí</p>
        </div>


    <div class="container py-5">

    <!-- Responzivní tabulka -->
    <div class="table-responsive">
        <table class="table table-bordered align-middle text-center">
            <thead class="table-light">
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
		foreach ($lessons as $lesson) /* line 28 */ {
			echo '                <tr>
                    <td><strong>';
			echo LR\Filters::escapeHtmlText($lesson['title']) /* line 30 */;
			echo '</strong></td>
                    <td><strong>';
			echo LR\Filters::escapeHtmlText($lesson['date']) /* line 31 */;
			echo '</strong></td>
                    <td>
';
			if (!empty($lesson['documents'])) /* line 33 */ {
				foreach ($lesson['documents'] as $docLink) /* line 34 */ {
					if (str_contains($docLink, 'Zalm')) /* line 35 */ {
						echo '                                    <a href="';
						echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($docLink)) /* line 36 */;
						echo '" target="_blank" download class="d-inline-flex align-items-center me-2 mb-1">
                                        <img src="';
						echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 37 */;
						echo '/uploads/img/pdf.png" width="30" height="30" class="me-1">
                                        <span class="text-danger">PDF</span>
                                    </a>
';
					}

				}

			}
			echo "\n";
			if (isset($lesson['documents']['pdf'])) /* line 44 */ {
				echo '                            <a href="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($lesson['documents']['pdf'])) /* line 45 */;
				echo '" target="_blank" download class="d-inline-flex align-items-center me-2 mb-1">
                                <img src="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 46 */;
				echo '/uploads/img/pdf.png" width="30" height="30" class="me-1">
                                <span class="text-danger">PDF</span>
                            </a>
';
			}
			echo '                    </td>
                    <td>
';
			if (isset($lesson['documents']['pptx'])) /* line 52 */ {
				echo '                            <a href="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($lesson['documents']['pptx'])) /* line 53 */;
				echo '" target="_blank" download class="d-inline-flex align-items-center me-2 mb-1">
                                <img src="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 54 */;
				echo '/uploads/img/pptx.png" width="30" height="30" class="me-1">
                                <span class="text-warning">PPTX</span>
                            </a>
';
			}
			echo '                    </td>
                    <td>
';
			if (isset($lesson['documents']['docx'])) /* line 60 */ {
				echo '                            <a href="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($lesson['documents']['docx'])) /* line 61 */;
				echo '" target="_blank" download class="d-inline-flex align-items-center me-2 mb-1">
                                <img src="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 62 */;
				echo '/uploads/img/docx.png" width="30" height="30" class="me-1">
                                <span class="text-primary">DOCX</span>
                            </a>
';
			}
			echo '                    </td>
                    <td>
';
			if (isset($lesson['documents']['res_pdf'])) /* line 68 */ {
				echo '                            <a href="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($lesson['documents']['res_pdf'])) /* line 69 */;
				echo '" target="_blank" download class="d-inline-flex align-items-center me-2 mb-1">
                                <img src="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 70 */;
				echo '/uploads/img/pdf.png" width="30" height="30" class="me-1">
                                <span class="text-danger">PDF</span>
                            </a>
';
			}
			echo '                    </td>
                </tr>
';

		}

		echo '            </tbody>
        </table>
    </div>

    <!-- Obrázky k lekcím -->
    <h1 class="text-center mb-4" style="color:blue">Verše k lekcím</h1>
    <div class="row g-4 row-cols-2 row-cols-md-3 row-cols-lg-4">
';
		foreach ($lessons as $lesson) /* line 84 */ {
			foreach ($lesson['documents'] as $jpgLink) /* line 85 */ {
				if (str_ends_with($jpgLink, '.jpg')) /* line 86 */ {
					echo '                    <div class="col">
                        <a href="';
					echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($jpgLink)) /* line 88 */;
					echo '" target="_blank">
                            <img src="';
					echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($jpgLink)) /* line 89 */;
					echo '" alt="Image" class="img-fluid rounded shadow-sm">
                        </a>
                    </div>
';
				}

			}


		}

		echo '    </div>
</div>
</div>
        
';
	}
}
