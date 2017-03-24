<?php snippet('header') ?>

<div class="row">
	<?php if ($page->slider() != '') snippet('background',['photos'=>$page->slider()]) ?>
	<article class="kontakt">
		<?php echo $page->text()->kirbytext() ?>
	</article>
	<?php snippet('social') ?>
</div>

<?php snippet('footer') ?>