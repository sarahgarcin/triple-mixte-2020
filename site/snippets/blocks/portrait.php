<article class="portrait row">
	<div class="portrait-image col-md-3">
		<?php $image= $data->cover()->toFile()?>
		<?php if($image):?>
			<figure>
				<img src="<?=$image->url()?>" alt="<?=$image->title()?>">
			</figure>
		<?php endif;?> 
	</div>
	<div class="portrait-text col-md-8">
		<h3><?= $data->title()?></h3>
		<?= $data->text()->kt()?>
	</div>

</article>