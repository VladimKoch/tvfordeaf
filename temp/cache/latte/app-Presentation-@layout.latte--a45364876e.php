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
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 8 */;
		echo '/css/bootstrap-icons.css">
	
	<link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 10 */;
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

</head>

<body>
';
		$this->createTemplate('header.latte', $this->params, 'include')->renderToContentType('html') /* line 46 */;
		echo '	<div class="container" style=" margin-bottom:100px;">
';
		foreach ($flashes as $flash) /* line 48 */ {
			echo '			<div class="alert alert-warning text-center">';
			echo LR\Filters::escapeHtmlText($flash->message) /* line 49 */;
			echo '</div>
';

		}

		echo '	</div>

';
		$this->renderBlock('content', [], 'html') /* line 61 */;
		$this->createTemplate('footer.latte', $this->params, 'include')->renderToContentType('html') /* line 65 */;
		echo '





	  <!-- 🍪 Lišta souhlasu s cookies 🍪 -->



	<script>window.scrollTo({ top: 0, behavior: \'smooth\' });</script>

	 <!-- MDB -->
    <script type="text/javascript" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 157 */;
		echo '/js/mdb.umd.min.js"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://unpkg.com/naja@2/dist/Naja.min.js"></script>
	<script src="https://unpkg.com/nette-forms@3/src/assets/netteForms.min.js"></script>
	<script src="https://unpkg.com/nette.ajax.js"></script>
	<script src="https://unpkg.com/htmx.org@2.0.4"></script>

	<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
  window.cookieconsent.initialise({
    type: "opt-in",
    palette: {
      popup: { background: "#000" },
      button: { background: "#f1d600" }
    },
    theme: "classic",
    content: {
      message: "Tento web používá cookies.",
      allow: "Povolit vše",
      deny: "Odmítnout vše",
      link: "Nastavení",
      href: "www.facebook.com",
      target: "_self"
    },
    onInitialise: function (status) {
      if (this.hasConsented()) {
        enableAll();
      }
    },
    onStatusChange: function(status) {
      if (this.hasConsented()) {
        enableAll();
      } else {
        disableAll();
      }
    }
  });

  // vlastní funkce
  function enableAll() {
    loadGoogleAnalytics();
    loadMarketing();
  }

  function disableAll() {
    console.log("Vše zakázáno");
  }

  // příklad – načtení jen GA
  function loadGoogleAnalytics() {
    if (window.gaLoaded) return;
    window.gaLoaded = true;

    var s = document.createElement("script");
    s.src = "https://www.googletagmanager.com/gtag/js?id=G-5HERJSYQJK";
    s.async = true;
    document.head.appendChild(s);

    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag(\'js\', new Date());
    gtag(\'config\', \'5HERJSYQJK\');
  }

  function loadMarketing() {
    console.log("Načtení marketingového trackingu…");
    // sem přidáš kód pro FB Pixel, reklamy apod.
  }

  // tady by sis udělal vlastní dialog pro detailní nastavení
  // a podle toho volal loadGoogleAnalytics() / loadMarketing()
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
			foreach (array_intersect_key(['flash' => '48'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}
}
