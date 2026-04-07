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

    <meta name="description" content="TV for Deaf is a platform dedicated to providing hope and information in sign language for the deaf community. Our mission is to ensure accessibility and inclusivity through visual communication." />
    <meta name="keywords" content="TV for Deaf, sign language, hope, health, deaf community, accessibility, inclusivity, visual communication, informations" />
	 
    <!-- Title -->
    <title>';
		if ($this->hasBlock('title')) /* line 19 */ {
			$this->renderBlock('title', [], function ($s, $type) {
				$ʟ_fi = new LR\FilterInfo($type);
				return LR\Filters::convertTo($ʟ_fi, 'html', $this->filters->filterContent('stripHtml', $ʟ_fi, $s));
			}) /* line 19 */;
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

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />




<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5HERJSYQJK"></script>

';
		if ($hasAnalyticsConsent) /* line 47 */ {
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
		$this->createTemplate('header.latte', $this->params, 'include')->renderToContentType('html') /* line 66 */;
		echo '  <div class="" style=""><p style="color:blackgrey; font-family: font-family: Open Sans, sans-serif;" class="text-center">Skutečný hlas, skutečný dopad</p></div>
		
';
		foreach ($flashes as $flash) /* line 69 */ {
			echo '			<div class="alert alert-info text-center">';
			echo LR\Filters::escapeHtmlText($flash->message) /* line 70 */;
			echo '</div>
';

		}

		echo '	</div>

';
		$this->renderBlock('content', [], 'html') /* line 78 */;
		echo '      
';
		if (!$cookiesAccepted) /* line 83 */ {
			echo '      <div id="cookie-consent" class="cookie-bar">
    <div class="cookie-bar-content">
        <img src="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 85 */;
			echo '/uploads/img/cookies.png" alt="Cookie Icon" class="cookie-icon">
        <p>
            Používáme soubory cookie, abychom zajistili co nejlepší uživatelský zážitek. Pokračováním v používání našeho webu s tím souhlasíte.
        </p>
        <div class="cookie-bar-buttons">
            <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('acceptCookies!', ['all'])) /* line 90 */;
			echo '" class="btn-accept" >Rozumím</a>
            <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('moreInfo!')) /* line 92 */;
			echo '" class="btn-info">Více informací</a>
        </div>
    </div>
</div>
';
		}
		echo '    

';
		$this->createTemplate('footer.latte', $this->params, 'include')->renderToContentType('html') /* line 98 */;
		echo '


	<script>window.scrollTo({ top: 0, behavior: \'smooth\' });</script>

	 <!-- MDB -->
    <script type="text/javascript" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 105 */;
		echo '/js/mdb.umd.min.js"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://unpkg.com/naja@2/dist/Naja.min.js"></script>
	<script src="https://unpkg.com/nette-forms@3/src/assets/netteForms.min.js"></script>
	<script src="https://unpkg.com/nette.ajax.js"></script>
	<script src="https://unpkg.com/htmx.org@2.0.4"></script>
	<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 114 */;
		echo '/js/script.js"></script>



	
</body>

</html>
';
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['flash' => '69'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}
}
