<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main>
	<?php snippet('toppage') ?>			
	<div class="content row">
		<div class="portraits-list ressources col-xs-12 col-md-10 col-md-offset-1">
			<ul class="portraits-cat">
				<?php foreach($page->children()->listed() as $child):?>
					<li>
						<h2><?=$child->title()?></h2>
						<section class="row">
							<?php foreach($child->children()->listed() as $subchild):?>
								<article class="col-xs-12 col-md-6">
									<?php if($pdf = $subchild->pdf()->toFile()):?>
										<a href="<?= $pdf->url()?>" title="<?=$subchild->title()?>" target="_blank">
									<?php else:?>
										<a href="<?= $subchild->url()?>" title="<?=$subchild->title()?>">
									<?php endif;?>
										<h3><?=$subchild->title()?></h3>
										<div class="ressource-content row">
											<div class="image-cover col-xs-12 col-md-6">
												<?php $image = $subchild->cover()->toFile()?>
												<?php if($image):?>
													<?= $image->crop(300, 300, 'center');?>
												<?php endif;?>
											</div>
											<div class="ressource-text col-xs-12 col-md-6">
												<?= $subchild->infos()->kt()?>
											</div>
										</div>
									</a>
								</article>
								
							<?php endforeach?>
						</section>
					</li>
				<?php endforeach;?>
			</ul>
		</div>
	</div>	
		
	</main>

<?php snippet('footer') ?>
