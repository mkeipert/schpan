<?php snippet('header') ?>

<div class="row">
	<?php if ($page->slider() != '') snippet('background',['photos'=>$page->slider()]) ?>
</div>
<?php snippet('separator') ?>

<article class="main <?php echo $page->template() ?>" role="main">
	<div class="col_left">
		<?php echo $page->text_left()->kirbytext() ?>
	</div>
	<div class="col_right">
		<?php echo $page->text_right()->kirbytext() ?>
	</div>
	<div style="clear:both;"></div>
</article>

<?php snippet('footer') ?>