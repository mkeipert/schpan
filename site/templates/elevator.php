<?php snippet('header') ?>

<div class="row">
	<?php if ($page->slider() != '') snippet('background',['photos'=>$page->slider()]) ?>
	<?php snippet('social') ?>
</div>

<article class="elevator" role="main">
	<div class="headline">
		<h1>It's all about PREMIUM</h1>
		<h2><?php echo $page->title()->html() ?></h2>
	</div>
	<div class="navigator">
	<?php 
		foreach($pages->visible() as $p): ?>
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
</article>

<?php snippet('footer') ?>