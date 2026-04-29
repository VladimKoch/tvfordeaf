<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\tvfordeaf\app\Presentation\ManaCentrum/aktual.latte */
final class Template_e17e81a02b extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\tvfordeaf\\app\\Presentation\\ManaCentrum/aktual.latte';

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


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['lesson' => '50, 63, 219, 281', 'jpgLink' => '283'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}


	/** {block title} on line 1 */
	public function blockTitle(array $ʟ_args): void
	{
		echo 'Aktuální čtvrtletí';
	}


	/** {block content} on line 2 */
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
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:default')) /* line 10 */;
		echo '" class="text-decoration-none fw-bold " style="color:blue;">Domů</a> 
            <i class="fa-solid fa-chevron-right text-muted mx-2" style="font-size: 0.8rem;"></i> 
            <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('ManaCentrum:default')) /* line 12 */;
		echo '" class="text-decoration-none fw-bold "style="color:blue;">ManaCentrum</a> 
            <i class="fa-solid fa-chevron-right text-muted mx-2" style="font-size: 0.8rem;"></i> 
            <span class="text-muted fw-semibold">Sobotní škola</span>
        </div>

      <div class="border border-black-900 rounded overflow-hidden shadow-sm" style="height:70px;margin-bottom:20px; background: white;">
        <h1 style="color:blue;font-size:1.5rem" class="text-center">Sobotní škola</h1>
            <p class="text-center" style="font-size:0.875rem">Aktuální čtvrtletí</p></div>

            
            <div class="d-flex justify-content-center mb-5">
                <span style="width: 100%; height: 4px; background-color: blue; border-radius: 2px;"></span>
            </div>
            <h2 class="text-center mb-4 mt-5" style="color:blue;font-size:1.5rem">Aktuální lekce</h2>
            
            <div class="mb-5 ">
                <div class="table-responsive">
                 <table class="table align-middle text-center mb-0">
                     <thead style="background: linear-gradient(90deg, rgba(6,14,131,1) 0%, rgba(12,25,180,1) 100%);">
                         <tr>
                             <th class="fw-semibold py-3 border-0" >Název Aktuální lekce</th>
                             <th class="fw-semibold py-3 border-0" >Datum</th>
                             <th class="fw-semibold py-3 border-0" >Prezentace PDF</th>
                             <th class="fw-semibold py-3 border-0" >Prezentace PowerPoint</th>
                             <th class="fw-semibold py-3 border-0" >Souhrn Word</th>
                             <th class="fw-semibold py-3 border-0" >Souhrn PDF</th>
                            </tr>
                        </thead>
                        <tbody>
';
		$activeLesson = null /* line 47 */;
		$activeLessonNumber = null /* line 48 */;
		echo '                            
';
		foreach ($lessons as $lesson) /* line 50 */ {
			if (!empty($lesson['date'])) /* line 51 */ {
				$lessonDateYmd = ($this->filters->date)($lesson['date'], 'Y-m-d') /* line 52 */;
				if ($lessonDateYmd >= $lastSunday && $lessonDateYmd <= $nextSaturday) /* line 53 */ {
					$activeLesson = $lesson /* line 54 */;
					$activeLessonNumber = (int) $lesson['title'] /* line 55 */;
				}
			}

		}

		echo '                            
';
		if ($activeLesson) /* line 61 */ {
			foreach ($lessons as $lesson) /* line 63 */ {
				$title = $lesson['title'] ?? '' /* line 64 */;
				if (str_contains($title, 'Pomocná prezentace k lekci ' . $activeLessonNumber) || str_contains($title, 'Pomocná prezentace k lekci ' . sprintf('%02d', $activeLessonNumber))) /* line 65 */ {
					echo '                            <tr class="table-light text-muted">
                                <td class="fw-semibold">';
					echo LR\Filters::escapeHtmlText($lesson['title']) /* line 67 */;
					echo '</td>
                                <td>';
					echo LR\Filters::escapeHtmlText($lesson['date'] ?? '') /* line 68 */;
					echo '</td>
                                
                                <td>
';
					if (isset($lesson['documents']['pdf']) || !empty($lesson['documents']) && str_contains(implode(' ', $lesson['documents']), 'Zalm')) /* line 71 */ {
						echo '                                    <a href="';
						echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($lesson['documents']['pdf'] ?? '#')) /* line 72 */;
						echo '" target="_blank" class="btn btn-sm btn-outline-danger rounded-pill d-inline-flex align-items-center fw-semibold">
                                        <img src="';
						echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 73 */;
						echo '/uploads/img/pdf.png" width="18" height="18" class="me-2"> PDF
                                    </a>
';
					}
					echo '                                </td>
                                <td>
';
					if (isset($lesson['documents']['pptx'])) /* line 78 */ {
						echo '                                    <a href="';
						echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($lesson['documents']['pptx'])) /* line 79 */;
						echo '" target="_blank" class="btn btn-sm btn-outline-warning rounded-pill d-inline-flex align-items-center fw-semibold text-dark">
                                        <img src="';
						echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 80 */;
						echo '/uploads/img/pptx.png" width="18" height="18" class="me-2"> PPTX
                                    </a>
';
					}
					echo '                                </td>
                                <td>
';
					if (isset($lesson['documents']['docx'])) /* line 85 */ {
						echo '                                            <a href="';
						echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($lesson['documents']['docx'])) /* line 86 */;
						echo '" target="_blank" class="btn btn-sm btn-outline-primary rounded-pill d-inline-flex align-items-center fw-semibold">
                                                <img src="';
						echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 87 */;
						echo '/uploads/img/docx.png" width="18" height="18" class="me-2"> DOCX
                                            </a>
';
					}
					echo '                                        </td>
                                        <td>
';
					if (isset($lesson['documents']['res_pdf'])) /* line 92 */ {
						echo '                                            <a href="';
						echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($lesson['documents']['res_pdf'])) /* line 93 */;
						echo '" target="_blank" class="btn btn-sm btn-outline-danger rounded-pill d-inline-flex align-items-center fw-semibold">
                                                <img src="';
						echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 94 */;
						echo '/uploads/img/pdf.png" width="18" height="18" class="me-2"> PDF
                                            </a>
';
					}
					echo '                                        </td>
                                    </tr>
';
				}

			}

			echo '                                    
';
			$lesson = $activeLesson /* line 103 */;
			echo '                                    <tr>
                                        <td class="fw-bold text-dark" style="font-size: 1.05rem;">';
			echo LR\Filters::escapeHtmlText($lesson['title']) /* line 105 */;
			echo '</td>
                                        <td class="fw-bold">';
			echo LR\Filters::escapeHtmlText($lesson['date']) /* line 106 */;
			echo '</td>
                                        
                                        <td>
';
			if (isset($lesson['documents']['pdf']) || !empty($lesson['documents']) && str_contains(implode(' ', $lesson['documents']), 'Zalm')) /* line 109 */ {
				echo '                                            <a href="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($lesson['documents']['pdf'] ?? '#')) /* line 110 */;
				echo '" target="_blank" class="btn btn-sm btn-outline-danger rounded-pill d-inline-flex align-items-center fw-semibold">
                                                <img src="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 111 */;
				echo '/uploads/img/pdf.png" width="18" height="18" class="me-2"> PDF
                                            </a>
';
			}
			echo '                                        </td>
                                        <td>
';
			if (isset($lesson['documents']['pptx'])) /* line 116 */ {
				echo '                                            <a href="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($lesson['documents']['pptx'])) /* line 117 */;
				echo '" target="_blank" class="btn btn-sm btn-outline-warning rounded-pill d-inline-flex align-items-center fw-semibold text-dark">
                                                <img src="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 118 */;
				echo '/uploads/img/pptx.png" width="18" height="18" class="me-2"> PPTX
                                            </a>
';
			}
			echo '                                        </td>
                                        <td>
';
			if (isset($lesson['documents']['docx'])) /* line 123 */ {
				echo '                                            <a href="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($lesson['documents']['docx'])) /* line 124 */;
				echo '" target="_blank" class="btn btn-sm btn-outline-primary rounded-pill d-inline-flex align-items-center fw-semibold">
                                                <img src="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 125 */;
				echo '/uploads/img/docx.png" width="18" height="18" class="me-2"> DOCX
                                            </a>
';
			}
			echo '                                        </td>
                                        <td>
';
			if (isset($lesson['documents']['res_pdf'])) /* line 130 */ {
				echo '                                            <a href="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($lesson['documents']['res_pdf'])) /* line 131 */;
				echo '" target="_blank" class="btn btn-sm btn-outline-danger rounded-pill d-inline-flex align-items-center fw-semibold">
                                                <img src="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 132 */;
				echo '/uploads/img/pdf.png" width="18" height="18" class="me-2"> PDF
                                            </a>
';
			}
			echo '                                        </td>
                                    </tr>
';
		} else /* line 137 */ {
			echo '                                    <tr>
                                        <td colspan="6" class="text-center text-muted py-4">Tento týden neprobíhá žádná lekce.</td>
                                    </tr>
';
		}
		echo '                                </tbody>
                            </table>
';
		$fullFileUrl = 'https://tvfordeaf.com/documents/' . $lesson['documents']['pptx'] /* line 146 */;
		echo "\n";
		$iframeSrc = 'https://view.officeapps.live.com/op/embed.aspx?src=' . urlencode($fullFileUrl) /* line 151 */;
		echo "\n";
		$fullFileUrl = 'https://tvfordeaf.com/documents/cz_2026t205.pptx' /* line 154 */;
		echo '
                            <div class="bg-white border-0 shadow-sm rounded-4 overflow-hidden mb-5">
    
                                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center p-4 border-bottom" style="background-color: #f8f9fa;">
                                    <div class="mb-3 mb-md-0 text-center text-md-start">
                                        <h3 class="fw-bold mb-0" style="color: #060e83;">
                                            <i class="fa-solid fa-person-chalkboard me-2 text-muted"></i>Prezentace k lekci
                                        </h3>
                                        <p class="text-muted small mb-0 mt-1">';
		echo LR\Filters::escapeHtmlText($lesson['title'] ?? 'Aktuální zamyšlení') /* line 164 */;
		echo '</p>
                                    </div>
                                    
                                    <a href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 168 */;
		echo '/documents/';
		echo LR\Filters::escapeHtmlAttr($lesson['documents']['pptx']) /* line 168 */;
		echo '" class="btn btn-outline-primary rounded-pill fw-semibold shadow-sm">
                                        <i class="fa-solid fa-download me-2"></i>Stáhnout PPTX
                                    </a>
                                </div>

                                <div class="p-0 position-relative" style="height: 65vh; min-height: 400px; background-color: #e9ecef;">
                                    <iframe 
                                        src="https://docs.google.com/gview?url=';
		echo LR\Filters::escapeHtmlAttr(urlencode($fullFileUrl)) /* line 177 */;
		echo '&embedded=true" 
                                        width="100%" 
                                        height="100%" 
                                        style="border: none;"
                                        title="Prezentace">
                                    </iframe>
                                </div>
                                
                                <div class="bg-light p-2 text-center border-top">
                                    <span class="small text-muted">
                                        <i class="fa-solid fa-circle-info me-1"></i> Pokud se náhled nenačítá, znovu aktualizujte <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 188 */;
		echo '/uploads/img/refresh.png" width="25" height="25" class="me-1 rounded"> stránku a nebo použijte tlačítko pro stažení výše. <i class="fa-solid fa-download me-2"></i>
                                    </span>
                                </div>
                                
                            </div>
            </div>
        </div>
        
        <div class="d-flex justify-content-center mb-5">
            <span style="width: 100%; height: 4px; background-color: blue; border-radius: 2px;"></span>
        </div>
        
        <h2 class="text-center mb-4" style="color:blue;;font-size:1.5rem">Lekce na celé čtvrtletí</h2>
        
        <div class="mb-5">
            <div class="table-responsive">
                <table class="table align-middle text-center mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th class="py-3 border-0 text-secondary">Název lekce</th>
                            <th class="py-3 border-0 text-secondary">Datum</th>
                            <th class="py-3 border-0 text-secondary">Prezentace PDF</th>
                            <th class="py-3 border-0 text-secondary">Prezentace PPTX</th>
                            <th class="py-3 border-0 text-secondary">Souhrn Word</th>
                            <th class="py-3 border-0 text-secondary">Souhrn PDF</th>
                        </tr>
                    </thead>
                    <tbody>
';
		foreach ($lessons as $lesson) /* line 219 */ {
			echo '                        <tr ';
			if (str_contains($lesson['title'] ?? '', 'Pomocná')) /* line 220 */ {
				echo 'class="table-light text-muted"';
			}
			echo '>
                            <td class="';
			if (!str_contains($lesson['title'] ?? '', 'Pomocná')) /* line 221 */ {
				echo 'fw-bold';
			}
			echo '">';
			echo LR\Filters::escapeHtmlText($lesson['title']) /* line 221 */;
			echo '</td>
                            <td class="fw-semibold">';
			echo LR\Filters::escapeHtmlText($lesson['date'] ?? '') /* line 222 */;
			echo '</td>
                            
                            <td>
';
			if (isset($lesson['documents']['pdf']) || !empty($lesson['documents']) && str_contains(implode(' ', $lesson['documents']), 'Zalm')) /* line 225 */ {
				echo '                                <a href="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($lesson['documents']['pdf'] ?? '#')) /* line 226 */;
				echo '" target="_blank" class="btn btn-sm btn-outline-danger rounded-pill d-inline-flex align-items-center fw-semibold">
                                    <img src="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 227 */;
				echo '/uploads/img/pdf.png" width="18" height="18" class="me-2"> PDF
                                </a>
';
			}
			echo '                            </td>
                            <td>
';
			if (isset($lesson['documents']['pptx'])) /* line 232 */ {
				echo '                                <a href="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($lesson['documents']['pptx'])) /* line 233 */;
				echo '" target="_blank" class="btn btn-sm btn-outline-warning rounded-pill d-inline-flex align-items-center fw-semibold text-dark">
                                    <img src="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 234 */;
				echo '/uploads/img/pptx.png" width="18" height="18" class="me-2"> PPTX
                                </a>
';
			}
			echo '                            </td>
                            <td>
';
			if (isset($lesson['documents']['docx'])) /* line 239 */ {
				echo '                                <a href="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($lesson['documents']['docx'])) /* line 240 */;
				echo '" target="_blank" class="btn btn-sm btn-outline-primary rounded-pill d-inline-flex align-items-center fw-semibold">
                                    <img src="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 241 */;
				echo '/uploads/img/docx.png" width="18" height="18" class="me-2"> DOCX
                                </a>
';
			}
			echo '                            </td>
                            <td>
';
			if (isset($lesson['documents']['res_pdf'])) /* line 246 */ {
				echo '                                <a href="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($lesson['documents']['res_pdf'])) /* line 247 */;
				echo '" target="_blank" class="btn btn-sm btn-outline-danger rounded-pill d-inline-flex align-items-center fw-semibold">
                                    <img src="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 248 */;
				echo '/uploads/img/pdf.png" width="18" height="18" class="me-2"> PDF
                                </a>
';
			}
			echo '                            </td>
                        </tr>
';

		}

		echo '                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="mt-5">
         <div class="d-flex justify-content-center mb-5">
             <span style="width: 100%; height: 4px; background-color: blue; border-radius: 2px;"></span>
         </div>
        <a href="https://onedrive.live.com/?redeem=aHR0cHM6Ly8xZHJ2Lm1zL3UvcyFBc1pKSDdpcGtrcVdwT05YU0lUVHMtRVVkZ0p5R2c%5FZT1WTlFVMUs&id=964A92A9B81F49C6%21602583&cid=964A92A9B81F49C6" target="_blank" class="text-decoration-none d-block h-100">
            <div class="bg-white border-0 shadow-sm rounded-4 p-4 p-lg-5 text-center h-100 d-flex flex-column align-items-center justify-content-center">
                <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 267 */;
		echo '/uploads/img/archive.png" alt="Archív" class="img-fluid mb-4" style="height: 120px; object-fit: contain;">
                <h4 class="fw-bold mb-0 "style="color: blue;">Archív</h4>
            </div>
        </a>
        <div class="d-flex justify-content-center mb-5">
            <span style="width: 100%; height: 4px; background-color: blue; border-radius: 2px;"></span>
        </div>
        </div>


        <h2 class="text-center fw-bold mb-4 mt-5" style="color: blue;">Verše k lekcím</h2>
        <div class="row g-4 row-cols-2 row-cols-md-3 row-cols-lg-4 mb-5">
';
		foreach ($lessons as $lesson) /* line 281 */ {
			if (!empty($lesson['documents'])) /* line 282 */ {
				foreach ($lesson['documents'] as $jpgLink) /* line 283 */ {
					if (str_ends_with($jpgLink, '.jpg')) /* line 284 */ {
						echo '            <div class="col">
                <div class="card h-100 border-0 shadow-sm overflow-hidden text-center rounded-3">
                    <a href="';
						echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($jpgLink)) /* line 288 */;
						echo '" target="_blank" class="d-block">
                        <img src="';
						echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($jpgLink)) /* line 289 */;
						echo '" alt="Verš k lekci" class="img-fluid w-100" style="object-fit: cover;">
                                    </a>
                                </div>
                            </div>
';
					}

				}

			}

		}

		echo '        </div>
        
    </div>
</div>

';
	}
}
