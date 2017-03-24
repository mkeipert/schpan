<?php snippet('header') ?>

<div id="film">
	<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $page->youtube()->html() ?>?rel=0" frameborder="0" allowfullscreen></iframe>	
	<p><?php echo $page->title() ?></p>
	<a href="<?php echo $page->parent()->url() ?>" title="<?php echo l::get('back') ?>">
		<i class="fa fa-backward" aria-hidden="true"></i>
	</a>
</div>

<?php snippet('footer') ?>