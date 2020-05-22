<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main>
		<div id="home-slider">
		  <?php $images =  $page->caroussel()->toFiles();?>
			<?php foreach ($images as $image): ?>
				<figure>
					<img src="<?=$image->url()?>" alt="<?=$image->name()?>">
				</figure>
			<?php endforeach;?>
		</div>
	</main>

<?php snippet('footer') ?>
