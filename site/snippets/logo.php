<!-- MOBILE LOGO -->
<div class="mobile-menu menu show-for-small-only">
	<div class="mobile-menu_logo logo">
		<a href="<?= $site->url()?>" title="<?= $site->title()?>">
			<h1><?= $site->title()?></h1>
		</a>
	</div>
	<div class="mobile-menu_btn">
		<span></span>
		<span></span>
		<span></span>
	</div>
</div>

<!-- DESKTOP LOGO -->
<div class="desktop-menu menu hide-for-small-only col-sm-4">
	<div class="desktop-menu_logo logo">
		<a class="row" href="<?= $site->url()?>" title="<?= $site->title()?>">
			<div id="canvas-wrapper"></div>
			<h1><?= $site->title()?></h1>
		</a>
	</div>
</div>