<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main>
	<?php snippet('toppage') ?>			
	<div class="content row">
		<div class="portraits-list col-md-10 col-md-offset-1">
			<?php
				foreach($page->mybuilder()->toBuilderBlocks() as $block):?>
				  	<?php snippet('blocks/' . $block->_key(), array('data' => $block));?>
				<?php endforeach;?>
		</div>
	</div>	
		
	</main>

<?php snippet('footer') ?>
