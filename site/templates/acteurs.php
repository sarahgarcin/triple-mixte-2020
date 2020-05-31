<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main>
	<?php snippet('toppage') ?>			
	<div class="content row">
		<div class="portraits-list col-md-10 col-md-offset-1">
			<ul class="portraits-cat">
				<?php foreach($page->children()->listed() as $child):?>
					<li>
						<h2><?=$child->title()?></h2>
						<section class="portraits-by-cat">
							<?php foreach($child->portraits()->toStructure() as $subchild):?>
								<article class="portrait row">
									<div class="portrait-image col-md-3">
										<?php $image= $subchild->cover()->toFile()?>
										<?php if($image):?>
											<figure>
												<img src="<?=$image->url()?>" alt="<?=$image->title()?>">
											</figure>
										<?php endif;?> 
									</div>
									<div class="portrait-text col-md-8">
										<h3><?= $subchild->title()?></h3>
										<?= $subchild->text()->kt()?>
									</div>
								</article>
							<?php endforeach;?>
						</section>
					</li>
				<?php endforeach;?>
			</ul>
		</div>
	</div>	
		
	</main>

<?php snippet('footer') ?>
