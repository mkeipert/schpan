<div id="navigator">
	<h1>It's all about PREMIUM</h1>
	<h2>Schillinger & Pankratz in 30 Sekunden</h2>
	<?php 
		foreach($pages->visible()->not('impressum') as $p): ?>
			<a href="<?php echo $p->url() ?>">
				<div class="col_0">
					<?php echo $p->title() ?>
				</div>
				<div class="col_1">
					<?php echo $p->description() ?>
				</div>
			</a>
	<?php endforeach ?>
</article>
