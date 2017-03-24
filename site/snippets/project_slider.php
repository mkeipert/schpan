
<?php foreach($projects as $project) :?>

<li>
	<img src="<?php echo $page->url() . '/' . $slide->image()->name() ?>)" />
		<a href="<?php echo $project->url() ?>">
				<?php echo $slide->name()->html() ?>
		</a>
</li>
<?php endforeach ?>
