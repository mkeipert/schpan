<?php snippet('header') ?>

<div class="row">
	<?php if ($page->slider() != '') snippet('background',['photos'=>$page->slider()]) ?>
</div>
<?php snippet('separator') ?>
<article class="main <?php echo $page->template() ?> padding_row animated" role="main">
	<ul class="grid">
		<?php foreach ($page->children()->sortBy('title', 'asc') as $p) : ?>
			<li>
					<figure>
						<img src="<?php echo $p->images()->first()->url() ?>" />
					<figcaption>
						<?php echo $p->text()->kirbytext() ?>
					</figcaption>
					</figure>
				</li>
	<?php endforeach ?>
	<div style="clear: both;"></div>
	<?php if($page->relatedPage() != '') snippet('relatedpage') ?>
</article>

<?php snippet('footer') ?>