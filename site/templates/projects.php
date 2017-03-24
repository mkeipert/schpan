<?php snippet('header') ?>


<div class="row">
	<?php if ($page->slider() != '') snippet('background',['photos'=>$page->slider()]) ?>
	<?php snippet('social') ?>
</div>
<?php snippet('separator') ?>

<article class="main <?php echo $page->template() ?> padding_row" role="main">
	<?php echo $page->text()->kirbytext() ?>

	<?php foreach($projects as $project): ?>
		<p><?php echo $project->projectname()->html() ?> 
			... 
			<a href="<?php echo $project->url() ?>" title="<?php echo $project->projectname()->html() ?>">
				<?php echo l::get('more') ?>
			</a>
		</p>
	<?php endforeach ?>

</article>


<?php snippet('footer') ?>
