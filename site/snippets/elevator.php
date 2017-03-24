<div class="elevator left">
	<div class="headline">
		<h1>It's all about PREMIUM - </h1>
		<h2>Schillinger & Pankratz in 30 Sekunden</h2>
	</div>
</div>
<div class="elevator right">
	<div class="headline">
		<h1>It's all about PREMIUM - </h1>
		<h2>Schillinger & Pankratz in 30 Sekunden</h2>
	</div>
	<div class="navigator">
	<?php 
		foreach($pages->visible()->not('social') as $p): ?>
			<a href="<?php echo $p->url() ?>">
				<div class="col_0">
					<?php echo $p->title() ?>
				</div>
				<div class="col_1">
					<?php echo $p->description() ?>
				</div>
			</a>
	<?php endforeach ?>
	</div>
</div>
<div class="elevatorClose">
	<i class="fa fa-times-circle fa-3x" aria-hidden="true"></i>
</div>
<?php snippet('footer') ?>