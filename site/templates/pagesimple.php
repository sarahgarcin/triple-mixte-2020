<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main>
	<?php snippet('toppage') ?>			
	<div class="content">
		<div class="pagesimple-block col-md-7">
			<?= $page->text()->kt()?>
		</div>
	</div>	
		
	</main>
<?php snippet('footer') ?>
