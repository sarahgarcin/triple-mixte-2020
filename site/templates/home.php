<?php snippet('header') ?>
<?php snippet('menu') ?>

	<div class="home-message">
		<div class="home-message-wrapper">
			<div class="home-message-content">
				<h1><?= $site->title()->html() ?></h1>
				<?= $site->description()->kt() ?>
			</div>
		</div>
	</div>
	<main>
		<div id="home-slider">
		  <?php $images =  $page->caroussel()->toFiles();?>
			<?php foreach ($images as $image): ?>
				<figure>
					<img src="<?=$image->url()?>" alt="<?=$image->name()?>">
					<figcaption class="col-xs-6 col-md-4">
						<div class="text-presentation">
							<?=$page->text()->kt()?>
						</div>
						<div class="image-caption">
							<?=$image->caption()->kt()?>
						</div>
					</figcaption>
				</figure>

			<?php endforeach;?>
		</div>
	</main>

<?php snippet('footer') ?>
