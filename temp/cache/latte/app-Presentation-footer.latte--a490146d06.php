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

		echo '<!-- FOOTER -->
 

  <footer class="footer py-5">
  <div class="footer-container container">
    
    <div class="row align-items-start gy-5">
      
      <div class="col-12 col-md-6 d-flex flex-column align-items-center align-items-md-start text-center text-md-start">
        
        <div class="footer-logo img-fluid"><img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 12 */;
		echo '/uploads/img/logo-white-ruka.png" style="height:30px;width:30px;filter: brightness(0) invert(1);"> TVFORDEAF
        </div>
        <div class="col-8 mt-3 m-auto">
        <p> Napište nám:</p>
        <div class="contact-form-container">
';
		$ʟ_tmp = $this->global->uiControl->getComponent('contactForm');
		if ($ʟ_tmp instanceof Nette\Application\UI\Renderable) $ʟ_tmp->redrawControl(null, false);
		$ʟ_tmp->render() /* line 17 */;

		echo '        </div>
        </div>
      </div>
      <div class="footer-columns col-12 col-md-6 d-flex flex-column flex-sm-row justify-content-around text-center text-sm-start">
        <div class="mb-4 mb-sm-0">
          <h6 class="">Podpora</h6>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white text-decoration-none">Nápověda</a></li>
            <li><a href="#" class="text-white text-decoration-none">Přístup</a></li>
            <li><a href="#" class="text-white text-decoration-none">Příručky</a></li>
            <li><a href="#" class="text-white text-decoration-none">FAQ</a></li>
            <li><a href="#" class="text-white text-decoration-none">Kontakt</a></li>
          </ul>
        </div>
        <div class="mb-4 mb-sm-0">
          <h6 class="">Komunita</h6>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white text-decoration-none">Fórum</a></li>
            <li><a href="#" class="text-white text-decoration-none">Události</a></li>
            <li><a href="#" class="text-white text-decoration-none">Příběhy</a></li>
            <li><a href="#" class="text-white text-decoration-none">Skupiny</a></li>
            <li><a href="#" class="text-white text-decoration-none">Spojit</a></li>
          </ul>
        </div>
        <div class="mb-4 mb-sm-0">
          <h6 class="">Zdroje</h6>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white text-decoration-none">Blog</a></li>
            <li><a href="#" class="text-white text-decoration-none">Tipy</a></li>
            <li><a href="#" class="text-white text-decoration-none">Nástroje</a></li>
            <li><a href="#" class="text-white text-decoration-none">Partneři</a></li>
            <li><a href="#" class="text-white text-decoration-none">Aktualizace</a></li>
          </ul>
        </div>
        <div class="text-enter mb-4 mb-sm-0">
          <h6 class="">Právní</h6>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white text-decoration-none">Podmínky</a></li>
            <li><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:privacy')) /* line 58 */;
		echo '" class="text-white text-decoration-none">Ochrana Soukromí</a></li>
            <li><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:cookies')) /* line 59 */;
		echo '" class="text-white text-decoration-none">Cookies</a></li>
            <li><a href="#" class="text-white text-decoration-none">Zásady</a></li>
            <li><a href="#" class="text-white text-decoration-none">Oznámení</a></li>
          </ul>
        </div>
      </div>
    </div>

    
   
  <hr class="">


    <div class="row align-items-center">
      <div class="col-12 col-md-6 text-center text-md-start mb-3 mb-md-0">
        <p class="m-0">&copy; 2025 TVforDeaf</p>
      </div>

      <div class="col-12 col-md-6 text-center text-md-center">
        <ul class="ul list-inline m-0">
          <li class="list-inline-item"><a href="https://facebook.com"target="_blank" class="fs-4"><i class="bi bi-facebook"></i></a></li>
          <li class="list-inline-item"><a href="https://youtube.com"target="_blank" class="fs-4"><i class="bi bi-youtube"></i></a></li>
          <li class="list-inline-item"><a href="https://linkedin.com"target="_blank" class="fs-4"><i class="bi bi-linkedin"></i></a></li>
          <li class="list-inline-item"><a href="https://instagram.com"target="_blank" class="fs-4"><i class="bi bi-instagram"></i></a></li>
          <li class="list-inline-item"><a href="https://twitter.com"target="_blank" class="fs-4"><i class="fa-brands fa-x-twitter"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>';
	}
}
