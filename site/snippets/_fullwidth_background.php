
<?php
$filenames = $photos->split();
if (is_array($filenames)) {
	$photos = page()->images()->filter(function($image) use ($filenames) {
		return in_array($image->filename(),$filenames);
	});
}

?>
	
	<?php if ($photos->count() < 2) : ?>
		<div class="background" style="background: url(<?php echo $page->images()->first()->url() ?>); background-size: cover;">
		</div>
	<?php else : ?>
		<ul class="background cycle-slideshow" 
		data-cycle-fx="fade"
    	data-cycle-pause-on-hover="false"
    	data-cycle-slides="> li"
    	data-cycle-speed="2500"
    	data-cycle-timeout="8000"
		>
		<div class="cycle-prev controls"><i class="fa fa-caret-left fa-4x" aria-hidden="true"></i></div>
    	<div class="cycle-next controls" ><i class="fa fa-caret-right fa-4x" aria-hidden="true"></i></div>

		<?php foreach ($photos as $photo) : ?>	
				<li style="background: url(<?php echo $photo->url() ?>); background-size: cover; width:100%; background-repeat: no-repeat;">
				</li>
		<?php endforeach ?>
		</ul>
	<?php endif ?>

