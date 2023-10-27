<?php

use CodeIgniter\Pager\PagerRenderer;

/**
 * @var PagerRenderer $pager
 */
$pager->setSurroundCount(0);
?>

<nav class="pagination">
	<ul class="pager pagination-list">
		<li <?= $pager->hasPrevious() ? '' : 'class="disabled"' ?>>
			<a class="pagination-previous" class="button is-link is-light is-focused " href="<?= $pager->getPrevious() ?? '#' ?>" aria-label="<?= lang('Pager.previous') ?>">
				<span aria-hidden="true"><?= lang('paginacion.newer') ?></span>
			</a>
		</li>
		<li <?= $pager->hasNext() ? '' : 'class="disabled"' ?>>
			<a class="pagination-next" href="<?= $pager->getnext() ?? '#' ?>" aria-label="<?= lang('Pager.next') ?>">
				<span  aria-hidden="true"><?= lang('paginacion.older') ?></span>
			</a>
		</li>
	</ul>
</nav>
