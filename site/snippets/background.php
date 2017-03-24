
<?php
$filenames = $photos->split();
if (is_array($filenames)) {
	$photos = page()->images()->filter(function($image) use ($filenames) {
		return in_array($image->filename(),$filenames);
	});
}

?>
	<?php if ($page->images()->count() > 2) : ?>
		<div class="background">
			<ul class="cycle-slideshow"
			data-cycle-fx="fade"
    		data-cycle-pause-on-hover="false"
    		data-cycle-slides="> li"
    		data-cycle-speed="2000"
    		data-cycle-timeout="5000"
			>
				<div class="cycle-prev controls"><i class="fa fa-arrow-circle-left fa-3x" aria-hidden="true"></i></div>
    			<div class="cycle-next controls" ><i class="fa fa-arrow-circle-right fa-3x" aria-hidden="true"></i></div>

			<?php foreach ($photos as $photo) : ?>
				<li>
					<picture>
  						<source srcset="<?php echo $photo->url() ?>" media="(min-aspect-ratio: 64/33)">
						<source srcset="<?php echo $page->contentURL() ?>/<?php echo $photo->name() ?>_s.jpg" media="(max-aspect-ratio: 64/33)">
   						<img 	srcset="<?php echo $photo->url() ?>" alt="…">
					</picture>
				</li>
			<?php endforeach ?>
			</ul>
		</div>
		
	<?php else : ?>
	<div class="background">
			<picture>
  				<source srcset="<?php echo $photos->first()->url() ?>" media="(min-aspect-ratio: 64/33)">
				<source srcset="<?php echo $page->contentURL() ?>/<?php echo $photos->first()->name() ?>_s.jpg" media="(max-aspect-ratio: 64/33)">
  				<img 	srcset="<?php echo $photos->first()->url() ?>" alt="…">
			</picture>
 		</div>
	<?php endif ?>
