<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\tvfordeaf\app\Presentation/@layout.latte */
final class Template_8095147802 extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\tvfordeaf\\app\\Presentation/@layout.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo '<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 6 */;
		echo '/css/bootstrap-icons.css">
    
    <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 8 */;
		echo '/css/style.css">
    <link rel="stylesheet" href="https://bootswatch.com/5/spacelab/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <meta name="description" content="TV for Deaf is a platform dedicated to providing hope and information in sign language for the deaf community. Our mission is to ensure accessibility and inclusivity through visual communication." />
    <meta name="keywords" content="TV for Deaf, sign language, hope, health, deaf community, accessibility, inclusivity, visual communication, informations" />
     
    <!-- Title -->
    <title>';
		if ($this->hasBlock('title')) /* line 16 */ {
			$this->renderBlock('title', [], function ($s, $type) {
				$ʟ_fi = new LR\FilterInfo($type);
				return LR\Filters::convertTo($ʟ_fi, 'html', $this->filters->filterContent('stripHtml', $ʟ_fi, $s));
			}) /* line 16 */;
			echo ' | ';
		}
		echo 'TV for Deaf</title>
        
     <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />

    <link rel="icon" type="image/x-icon" href="https://tvfordeaf.com/favicon.ico">

';
		if ($hasAnalyticsConsent) /* line 27 */ {
			echo '        <!-- Google tag (GA4) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-5HERJSYQJK"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag(\'js\', new Date());
            gtag(\'config\', \'G-5HERJSYQJK\', { \'anonymize_ip\': true });
        </script>
';
		}
		echo '
    <style>
        /* --- Nový design hlavní lišty (tmavě modrý pruh) --- */
        .custom-cookie-bar {
            position: fixed;
            bottom: -100%; /* Pro animaci vyjetí */
            left: 0;
            width: 100%;
            background-color: #082446; /* Tmavě modrá barva z vašeho návrhu */
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 30px;
            z-index: 1045 !important;
            box-sizing: border-box;
            box-shadow: 0 -4px 15px rgba(0,0,0,0.2);
            transition: bottom 0.5s ease-in-out;
        }
        .custom-cookie-bar.show {
            bottom: 0;
        }
        .custom-cookie-left {
            display: flex;
            align-items: center;
            gap: 20px;
            max-width: 60%;
        }
        .custom-cookie-left img {
            width: 55px;
            height: auto;
        }
        .custom-cookie-left p {
            margin: 0;
            font-size: 15px;
            line-height: 1.4;
            font-family: \'Roboto\', sans-serif;
        }
        .custom-cookie-right {
            display: flex;
            gap: 10px;
            align-items: center;
            flex-wrap: wrap;
        }
        /* Bílá tlačítka (Přijmout vše / Pouze nezbytné) */
        .btn-cookie-white {
            background-color: #ffffff;
            color: #082446;
            border: 1px solid #ffffff;
            padding: 8px 16px;
            border-radius: 4px;
            font-weight: 600;
            text-decoration: none;
            transition: background-color 0.2s;
            cursor: pointer;
            font-size: 14px;
        }
        .btn-cookie-white:hover {
            background-color: #e9ecef;
            color: #082446;
        }
        /* Modré tlačítko (Nastavení / Více informací) */
        .btn-cookie-blue {
            background-color: #3b8ef6; /* Světlejší modrá jako na obrázku */
            color: #ffffff;
            border: 1px solid #3b8ef6;
            padding: 8px 16px;
            border-radius: 4px;
            font-weight: 600;
            text-decoration: none;
            transition: background-color 0.2s;
            cursor: pointer;
            font-size: 14px;
        }
        .btn-cookie-blue:hover {
            background-color: #2563eb;
            color: #ffffff;
        }
        
        /* Responzivita pro mobilní telefony */
        @media (max-width: 992px) {
            .custom-cookie-bar {
                flex-direction: column;
                gap: 15px;
                padding: 20px;
            }
            .custom-cookie-left {
                max-width: 100%;
                flex-direction: column;
                text-align: center;
            }
            .custom-cookie-right {
                width: 100%;
                justify-content: center;
            }
        }

        /* Styly pro malou plovoucí ikonku vlevo dole */
        .cookie-floating-icon {
            position: fixed;
            bottom: 20px;
            left: 20px;
            width: 50px;
            height: 50px;
            background-color: #ffffff;
            border-radius: 50%;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9998;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }
        .cookie-floating-icon:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 14px rgba(0,0,0,0.25);
        }
        .cookie-floating-icon img {
            width: 25px;
            height: auto;
        }
    </style>
</head>

<body';
		echo ($ʟ_tmp = array_filter([($this->global->fn->isLinkCurrent)($this, 'FitCentrum:*') ? 'page-fitcentrum' : null])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 164 */;
		echo '>
    <div class="container">
';
		$this->createTemplate('header.latte', $this->params, 'include')->renderToContentType('html') /* line 167 */;
		echo '        <div class="text-center">
            <p style="color: dimgrey; font-family: \'Open Sans\', sans-serif;">Skutečný hlas, skutečný dopad</p>
        </div>
        
';
		foreach ($flashes as $flash) /* line 172 */ {
			echo '            <div class="alert alert-info text-center">';
			echo LR\Filters::escapeHtmlText($flash->message) /* line 173 */;
			echo '</div>
';

		}

		echo '    </div>

';
		$this->renderBlock('content', [], 'html') /* line 177 */;
		echo '
    <div class="d-flex justify-content-end">
        <model-viewer 
            src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 181 */;
		echo '/blender/deaf_3d.glb"
            camera-controls 
            touch-action="pan-y" 
            shadow-intensity="1" 
            style="width: 10%; height: 100px;">
        </model-viewer>
    </div>
      
';
		if (!$cookiesAccepted) /* line 189 */ {
			echo '        <!-- Nový design hlavní lišty podle obrázku -->
        <div id="cookieConsentBanner" class="custom-cookie-bar">
            <!-- Levá část s ikonou a textem -->
            <div class="custom-cookie-left">
                <img src="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 194 */;
			echo '/uploads/img/cookies.png" alt="Cookies">
                <p>
                    Používáme soubory cookie, abychom zajistili co nejlepší uživatelský zážitek. Pokračováním v používání našeho webu s tím souhlasíte.
                </p>
            </div>
            
            <!-- Pravá část s tlačítky -->
            <div class="custom-cookie-right">
                <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('acceptCookies!', ['category' => 'all'])) /* line 202 */;
			echo '" class="btn-cookie-white">Rozumím</a>
                <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('acceptCookies!', ['category' => 'essentials'])) /* line 203 */;
			echo '" class="btn-cookie-white">Pouze nezbytné</a>
                <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:cookies')) /* line 204 */;
			echo '" class="btn-cookie-white">Více Informací</a>
                <!-- Tlačítko, které otevírá Modální okno -->
                <button type="button" class="btn-cookie-blue" data-bs-toggle="modal" data-bs-target="#cookieSettingsModal">Nastavení</button>
            </div>
        </div>
';
		}
		echo '
    <!-- Malá ikonka sušenky (zobrazí se, když už uživatel hlasoval) - Nyní otevírá Modal -->
';
		if ($cookiesAccepted) /* line 212 */ {
			echo '        <button class="cookie-floating-icon" data-bs-toggle="modal" data-bs-target="#cookieSettingsModal" title="Změnit nastavení cookies">
            <img src="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 214 */;
			echo '/uploads/img/cookies-blue.png" alt="Cookies nastavení" style="width: 50px; height: auto;">
        </button>
';
		}
		echo '
    <!-- MODÁLNÍ OKNO PRO NASTAVENÍ -->
    <div class="modal fade" id="cookieSettingsModal" tabindex="-1" aria-labelledby="cookieSettingsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 20px;">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-bold" id="cookieSettingsModalLabel">Nastavení cookies</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Zavřít"></button>
                </div>
                <div class="modal-body">
                    <p class="text-muted small mb-4">Vyberte si, jaké typy cookies nám povolíte používat.</p>
                    
                    <div class="d-flex justify-content-between align-items-center mb-3 p-3 bg-light rounded">
                        <div>
                            <strong class="d-block">Nezbytné (Technické)</strong>
                            <small class="text-muted">Nutné pro fungování webu.</small>
                        </div>
                        <div class="form-check form-switch fs-4">
                            <input class="form-check-input" type="checkbox" checked disabled>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3 p-3 bg-light rounded">
                        <div>
                            <strong class="d-block">Analytické</strong>
                            <small class="text-muted">Pomáhají nám pochopit, jak web používáte.</small>
                        </div>
                        <div class="form-check form-switch fs-4">
                            <input class="form-check-input" type="checkbox" id="switch-analytics" ';
		if ($hasAnalyticsConsent) /* line 245 */ {
			echo 'checked';
		}
		echo '>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center p-3 bg-light rounded">
                        <div>
                            <strong class="d-block">Marketingové</strong>
                            <small class="text-muted">Pro lepší cílení našich reklam.</small>
                        </div>
                        <div class="form-check form-switch fs-4">
                            <input class="form-check-input" type="checkbox" id="switch-marketing" ';
		if ($hasMarketingConsent) /* line 255 */ {
			echo 'checked';
		}
		echo '>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 pt-0 justify-content-between">
                    <button type="button" class="btn btn-outline-secondary rounded-pill" data-bs-dismiss="modal">Zrušit</button>
                    <!-- Zde je data-link, který si vezme JavaScript -->
                    <button type="button" id="btn-save-settings" class="btn btn-primary rounded-pill px-4" data-link="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('acceptCookies!', ['category' => 'XXX'])) /* line 262 */;
		echo '">Uložit nastavení</button>
                </div>
            </div>
        </div>
    </div>

';
		$this->createTemplate('footer.latte', $this->params, 'include')->renderToContentType('html') /* line 268 */;
		echo '
    <script>window.scrollTo({ top: 0, behavior: \'smooth\' });</script>

    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.4.0/model-viewer.min.js"></script>

    <!-- MDB -->
    <script type="text/javascript" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 275 */;
		echo '/js/mdb.umd.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/naja@2/dist/Naja.min.js"></script>
    <script src="https://unpkg.com/nette-forms@3/src/assets/netteForms.min.js"></script>
    <script src="https://unpkg.com/nette.ajax.js"></script>
    <script src="https://unpkg.com/htmx.org@2.0.4"></script>
     <!-- Nechte schválně zakomentované, pravděpodobně to je ten vetřelec! -->
    
    <!-- SCRIPT PRO OVLÁDÁNÍ -->
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // 1. Oživení animace hlavní lišty (vyjede zespodu po 1 vteřině)
        const cookieBanner = document.getElementById(\'cookieConsentBanner\');
        if (cookieBanner) {
            setTimeout(() => {
                cookieBanner.classList.add(\'show\');
            }, 1000); 
        }

        // 2. Obsluha uložení detailního nastavení z modálního okna
        const btnSaveSettings = document.getElementById(\'btn-save-settings\');
        const switchAnalytics = document.getElementById(\'switch-analytics\');
        const switchMarketing = document.getElementById(\'switch-marketing\');

        if (btnSaveSettings) {
            btnSaveSettings.addEventListener(\'click\', () => {
                // Zjistíme, co všechno uživatel naklikal
                let category = \'default\';
                if (switchAnalytics.checked && switchMarketing.checked) category = \'all\';
                else if (switchAnalytics.checked) category = \'analytics\';
                else if (switchMarketing.checked) category = \'marketing\';
                
                // Načteme Nette odkaz z tlačítka, nahradíme XXX výběrem a přesměrujeme
                let url = btnSaveSettings.getAttribute(\'data-link\');
                window.location.href = url.replace(\'XXX\', category);
            });
        }
    });
    </script>
</body>
</html>';
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['flash' => '172'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}
}
