<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\tvfordeaf\app\Presentation\Home/onas.latte */
final class Template_aefbce308b extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\tvfordeaf\\app\\Presentation\\Home/onas.latte';

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


	/** {block title} on line 1 */
	public function blockTitle(array $ʟ_args): void
	{
		echo 'Výpis ze spolkového rejstříku | Spolek Daniel';
	}


	/** {block content} on line 2 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '


<div class="text-center">
    <h3>Podpořte náš projekt</h3>
    <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 8 */;
		echo '/images/files/qr-platba.jpeg" alt="Platební QR kód" class="d-block mx-auto" style="width: 200px;">
    <p>Číslo účtu: 123456789/0100</p>
</div>

<div class="container my-5">
    <div class="card shadow-sm border-0 mx-auto" style="max-width: 900px; border-radius: 12px;">
        <div class="card-body p-4 p-md-5">

            <h1 class="text-center mb-2" style="font-size: 1.8rem; color: #003399;">Výpis ze spolkového rejstříku</h1>
            <p class="text-center text-muted mb-5 pb-3 border-bottom">
                vedeného Krajským soudem v Ostravě, oddíl L, vložka 21614
            </p>

            <div class="mb-5">
                <h3 class="h5 fw-bold mb-4" style="color: #003399;">Základní informace</h3>
                <dl class="row text-start">
                    <dt class="col-sm-4 text-muted fw-normal">Název</dt>
                    <dd class="col-sm-8 fw-bold">Spolek Daniel, z.s.</dd>

                    <dt class="col-sm-4 text-muted fw-normal">Sídlo</dt>
                    <dd class="col-sm-8">Volgogradská 2447/52, Zábřeh, 700 30 Ostrava</dd>

                    <dt class="col-sm-4 text-muted fw-normal">Identifikační číslo (IČO)</dt>
                    <dd class="col-sm-8">220 81 593</dd>

                    <dt class="col-sm-4 text-muted fw-normal">Právní forma</dt>
                    <dd class="col-sm-8">Spolek</dd>

                    <dt class="col-sm-4 text-muted fw-normal">Datum vzniku a zápisu</dt>
                    <dd class="col-sm-8">15. října 2024</dd>

                    <dt class="col-sm-4 text-muted fw-normal">Spisová značka</dt>
                    <dd class="col-sm-8">L 21614 vedená u Krajského soudu v Ostravě</dd>

                    <dt class="col-sm-4 text-muted fw-normal">Odkaz na dokument</dt>
                    <dd class="col-sm-8"><a href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 43 */;
		echo '/images/files/Spolek Daniel soudní potvrzení.jpeg" target="_blank">Spolek Daniel soudní potvrzení</a></dd>

                </dl>
            </div>

            <div class="mb-5">
                <h3 class="h5 fw-bold mb-4" style="color: #003399;">Činnost</h3>
                
                <h4 class="h6 fw-bold mt-3">Účel:</h4>
                <p class="text-secondary" style="line-height: 1.7;">
                    Hlavním posláním spolku je podporovat osoby se smyslovým postižením, podporovat jejich rodinu a přátele, zdravý způsob života těchto osob ve všech jeho dimenzích; tedy tělesné, psychické, duševní i sociální zdraví. Motivovat ke zdravému způsobu života přijetím osobní odpovědnosti za zdraví. Vědomá snaha o uplatňování principů zdraví a prevence nemocí v osobním životě i ve společnosti. Spolupráce s organizacemi uplatňujícími preventivní přístupy ke zdraví na místní, národní a mezinárodní úrovni, dále i spolupráce s veřejnými a vzdělávacími institucemi v ČR i EU.
                </p>

                <h4 class="h6 fw-bold mt-4">Předmět činnosti:</h4>
                <ul class="text-secondary" style="line-height: 1.7;">
                    <li>Poskytování bezplatného poradenství a podpory znevýhodněným osobám.</li>
                    <li>Zajišťování finančních prostředků nezbytných pro realizaci projektů naplňujících účel spolku.</li>
                    <li>Příprava a realizace vzdělávacích akcí (přednášky, semináře).</li>
                    <li>Realizace osvětové činnosti.</li>
                </ul>

                <h4 class="h6 fw-bold mt-4">Další informace o činnosti:</h4>
                <p class="text-secondary">Další formy činnosti a konkretizaci činností stanoví členská schůze.</p>
            </div>

            <div class="mb-5">
                <h3 class="h5 fw-bold mb-4" style="color: #003399;">Osoby a orgány</h3>
                <dl class="row text-start">
                    <dt class="col-sm-4 text-muted fw-normal">Název nejvyššího orgánu</dt>
                    <dd class="col-sm-8">Kolegium</dd>

                    <dt class="col-sm-4 text-muted fw-normal">Statutární orgán</dt>
                    <dd class="col-sm-8">Předseda</dd>
                </dl>

                <div class="card bg-light border-0 mt-3" style="border-radius: 8px;">
                    <div class="card-body p-4">
                        <h5 class="h6 fw-bold mb-3">Předseda:</h5>
                        <dl class="row mb-0 text-start">
                            <dt class="col-sm-4 text-muted fw-normal">Jméno</dt>
                            <dd class="col-sm-8 fw-bold">LEONA SROKOVÁ</dd>

                            <dt class="col-sm-4 text-muted fw-normal">Datum narození</dt>
                            <dd class="col-sm-8">24. dubna 1974</dd>

                            <dt class="col-sm-4 text-muted fw-normal">Adresa bydliště</dt>
                            <dd class="col-sm-8">Volgogradská 2447/52, Zábřeh, 700 30 Ostrava</dd>

                            <dt class="col-sm-4 text-muted fw-normal">Den vzniku funkce</dt>
                            <dd class="col-sm-8">15. října 2024</dd>
                        </dl>
                    </div>
                </div>
            </div>

            <div class="mb-5">
                <h3 class="h5 fw-bold mb-4" style="color: #003399;">Ostatní informace</h3>
                <dl class="row text-start">
                    <dt class="col-sm-4 text-muted fw-normal">Počet členů</dt>
                    <dd class="col-sm-8">1</dd>

                    <dt class="col-sm-4 text-muted fw-normal">Způsob jednání</dt>
                    <dd class="col-sm-8">Předseda jedná za spolek samostatně.</dd>

                </dl>
            </div>

            <div class="mt-5 pt-4 border-top text-center text-muted" style="font-size: 0.85rem;">
                <p class="mb-1">
                    Tento výpis je neprodejný a byl pořízen na Internetu 
                    (<a href="http://www.justice.cz" target="_blank" style="color: inherit; text-decoration: underline;">http://www.justice.cz</a>).
                </p>
                <p class="mb-0">Dne: 4.11.2024 12:31 &nbsp;|&nbsp; Údaje platné ke dni 4.11.2024 03:55</p>
            </div>

        </div>
    </div>
</div>
';
	}
}
