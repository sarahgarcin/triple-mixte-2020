<section class="col-xs-10 col-xs-offset-1 col-md-12 col-md-offset-0">
	<?php
		foreach($data->portraitlist()->toBuilderBlocks() as $portrait):
		  snippet('blocks/' . $portrait->_key(), array('data' => $portrait));
		endforeach;
	?>
</section>