<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main>
	<?php snippet('toppage') ?>			
	<div class="content ateliers-list">
		<ul class="ateliers-years">
			<?php foreach($page->children()->listed() as $child):?>
				<li>
					<h2 class="year-title"><?= $child->title() ?></h2>
					<ul class="ateliers-wrapper row">
						<?php foreach($child->children()->listed() as $subchild):?>
							<li class=" col-xs-6 col-md-3">
								<a href="<?= $subchild->url()?>" title="<?= $subchild->title()?>">
									<div class="atelier-image-cover">
										<?php $image = $subchild->cover()->toFile()?>
										<?php if($image):?>
											<?= $image->crop(300, 300, 'center');?>
										<?php endif;?>
									</div>
									<div class="atelier-title">
										<h2><?= $subchild->title() ?></h2>
									</div>
								</a>
							</li>
						<?php endforeach;?>
					</ul>
					
				</li>
			<?php endforeach;?>
			<li></li>
		</ul>
	</div>	
		
	</main>

<?php snippet('footer') ?>
