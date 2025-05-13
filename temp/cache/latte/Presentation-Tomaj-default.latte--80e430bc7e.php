<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\web\app\Presentation\Tomaj/default.latte */
final class Template_80e430bc7e extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\web\\app\\Presentation\\Tomaj/default.latte';

	public const Blocks = [
		['content' => 'blockContent', 'title' => 'blockTitle'],
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
			foreach (array_intersect_key(['item' => '7'], $this->params) as $ʟ_v => $ʟ_l) {
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
<div id="banner">
';
		$this->renderBlock('title', get_defined_vars()) /* line 4 */;
		echo '</div>
<div id="content">
';
		foreach ($response->getPayload()['users'] as $item) /* line 7 */ {
			echo '    <div>
    	<table>
        <thead>
            <tr>
                <th>Jméno</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody id="myTable">
            <tr>
                <td>';
			echo LR\Filters::escapeHtmlText($item['firstName']) /* line 19 */;
			echo '</td>
                <td>';
			echo LR\Filters::escapeHtmlText($item['lastName']) /* line 20 */;
			echo '</td>
                <td>';
			echo LR\Filters::escapeHtmlText($item['email']) /* line 21 */;
			echo '</td>
                <td>';
			echo LR\Filters::escapeHtmlText($item['roles']) /* line 22 */;
			echo '</td>
            </tr>
        </tbody>
    </table>
    </div>
';

		}

		echo '
<br>



<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:')) /* line 33 */;
		echo '">Zpět</a>
</div>

';
	}


	/** n:block="title" on line 4 */
	public function blockTitle(array $ʟ_args): void
	{
		echo '	<h1>Users</h1>
';
	}
}
