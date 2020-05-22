<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main>
	<?php snippet('toppage') ?>			
	<div class="content ateliers-list">
		<ul class="row">
			<?php foreach($page->children()->listed() as $child):?>
				<li class=" col-xs-6 col-md-3">
					<a href="<?= $child->url()?>" title="<?= $child->title()?>">
						<div class="atelier-image-cover">
							<?php $image = $child->cover()->toFile()?>
							<?php if($image):?>
								<?= $image->crop(300, 300, 'center');?>
							<?php endif;?>
						</div>
						<div class="atelier-title">
							<h2><?= $child->title() ?></h2>
						</div>
					</a>
				</li>
			<?php endforeach;?>
			<li></li>
		</ul>
	</div>	
		
	</main>

<?php snippet('footer') ?>
