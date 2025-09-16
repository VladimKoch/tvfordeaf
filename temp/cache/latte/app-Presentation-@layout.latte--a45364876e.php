<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\tvfordeaf\app\Presentation\@layout.latte */
final class Template_a45364876e extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\tvfordeaf\\app\\Presentation\\@layout.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo '<!DOCTYPE html>
<html>
<head>


	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 9 */;
		echo '/css/bootstrap-icons.css">
	
	<link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 11 */;
		echo '/css/style.css">
	<link rel="stylesheet" href="https://bootswatch.com/5/spacelab/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">



	    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />

	<link rel="icon" type="image/x-icon" href="https://tvfordeaf.com/favicon.ico">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />




<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5HERJSYQJK"></script>

';
		if ($hasAnalyticsConsent) /* line 43 */ {
			echo '    <!-- Google tag (GA4) -->
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

</head>


<body>
	<div class="container" style="">
';
		$this->createTemplate('header.latte', $this->params, 'include')->renderToContentType('html') /* line 62 */;
		echo '  <div class="" style=""><p style="color:blackgrey; font-family: font-family: Open Sans, sans-serif;" class="text-center">Skutečný hlas, skutečný dopad</p>
            </div>
';
		foreach ($flashes as $flash) /* line 65 */ {
			echo '			<div class="alert alert-warning text-center">';
			echo LR\Filters::escapeHtmlText($flash->message) /* line 66 */;
			echo '</div>
';

		}

		echo '	</div>

';
		$this->renderBlock('content', [], 'html') /* line 74 */;
		if (!$cookiesAccepted) /* line 78 */ {
			if (!$cookiesAccepted) /* line 79 */ {
				echo '      <div id="cookie-consent" class="cookie-bar">
    <div class="cookie-bar-content">
        <img src="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 81 */;
				echo '/uploads/img/cookies.png" alt="Cookie Icon" class="cookie-icon">
        <p>
            Používáme soubory cookie, abychom zajistili co nejlepší uživatelský zážitek. Pokračováním v používání našeho webu s tím souhlasíte.
        </p>
        <div class="cookie-bar-buttons">
            <a href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('acceptCookies!', ['all'])) /* line 86 */;
				echo '" class="btn-accept" >Rozumím</a>
            <a href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('acceptCookies!', ['essentials'])) /* line 87 */;
				echo '" class="btn-accept">Pouze nezbytné</a>
            <a href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('moreInfo!')) /* line 88 */;
				echo '" class="btn-info">Více informací</a>
        </div>
    </div>
</div>
';
			}
		}
		echo "\n";
		$this->createTemplate('footer.latte', $this->params, 'include')->renderToContentType('html') /* line 94 */;
		echo '


	<script>window.scrollTo({ top: 0, behavior: \'smooth\' });</script>

	 <!-- MDB -->
    <script type="text/javascript" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 101 */;
		echo '/js/mdb.umd.min.js"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://unpkg.com/naja@2/dist/Naja.min.js"></script>
	<script src="https://unpkg.com/nette-forms@3/src/assets/netteForms.min.js"></script>
	<script src="https://unpkg.com/nette.ajax.js"></script>
	<script src="https://unpkg.com/htmx.org@2.0.4"></script>


<script>
    document.addEventListener(\'DOMContentLoaded\', function() {
        const acceptButton = document.querySelector(\'.btn-accept\');
        if (acceptButton) {
            acceptButton.addEventListener(\'click\', function(e) {
                e.preventDefault();
                document.getElementById(\'cookie-consent\').style.display = \'none\';
                fetch(acceptButton.href);
            });
        }
    });
</script>

	
</body>

</html>
';
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['flash' => '65'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}
}
