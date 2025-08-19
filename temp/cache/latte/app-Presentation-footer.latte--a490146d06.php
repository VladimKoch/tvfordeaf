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
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 11 */;
		echo '/uploads/img/logo-white-ruka.png" style="height:30px;width:30px;filter: brightness(0) invert(1);"> TVFORDEAF</div>
      </div>

      <div class="footer-columns col-12 col-md-6 d-flex flex-column flex-sm-row justify-content-around text-center text-sm-start">
        <div class="mb-4 mb-sm-0">
          <h6 class="">Support</h6>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white text-decoration-none">Help</a></li>
            <li><a href="#" class="text-white text-decoration-none">Access</a></li>
            <li><a href="#" class="text-white text-decoration-none">Guides</a></li>
            <li><a href="#" class="text-white text-decoration-none">FAQ</a></li>
            <li><a href="#" class="text-white text-decoration-none">Contact</a></li>
          </ul>
        </div>
        <div class="mb-4 mb-sm-0">
          <h6 class="">Community</h6>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white text-decoration-none">Forum</a></li>
            <li><a href="#" class="text-white text-decoration-none">Events</a></li>
            <li><a href="#" class="text-white text-decoration-none">Stories</a></li>
            <li><a href="#" class="text-white text-decoration-none">Groups</a></li>
            <li><a href="#" class="text-white text-decoration-none">Connect</a></li>
          </ul>
        </div>
        <div class="mb-4 mb-sm-0">
          <h6 class="">Resources</h6>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white text-decoration-none">Blog</a></li>
            <li><a href="#" class="text-white text-decoration-none">Tips</a></li>
            <li><a href="#" class="text-white text-decoration-none">Tools</a></li>
            <li><a href="#" class="text-white text-decoration-none">Partners</a></li>
            <li><a href="#" class="text-white text-decoration-none">Updates</a></li>
          </ul>
        </div>
        <div class="mb-4 mb-sm-0">
          <h6 class="">Legal</h6>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white text-decoration-none">Terms</a></li>
            <li><a href="#" class="text-white text-decoration-none">Privacy</a></li>
            <li><a href="#" class="text-white text-decoration-none">Cookies</a></li>
            <li><a href="#" class="text-white text-decoration-none">Policy</a></li>
            <li><a href="#" class="text-white text-decoration-none">Notice</a></li>
          </ul>
        </div>
      </div>
    </div>

    
   
  <hr class="">


    <div class="row align-items-center">
      <div class="col-12 col-md-6 text-center text-md-start mb-3 mb-md-0">
        <p class="m-0">&copy; 2025 TVforDeaf</p>
      </div>

      <div class="col-12 col-md-6 text-center text-md-end">
        <ul class="ul list-inline m-0 gap:20px;">
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
