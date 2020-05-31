<div class="page-header no-background col-md-7">
		<h1>
			<?php if($page->parent()):?>
				<a href="" onclick="window.history.go(-1); return false;" title="<?= $page->parent()->title()?>">
						←
				</a>
		<?php endif?>
			<?= $page->title()?></h1>
	</div>


