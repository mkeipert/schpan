<li>
	<figure>
		<img src="<?php echo $page->contentURL() ?>/<?php echo $data->serviceIcon->filename() ?>" />
	</figure>
	<article class="details">
		<?php echo $data->serviceText()->kirbytext() ?>
		<?php 
			$cat = $data->serviceTitle();
			$item = $pages->find('projects')->children()->filterBy('category',$cat,',')->shuffle()->first();
		
			?>
		<a href="<?php echo $item->url() ?>?cat=<?php echo $cat ?>"><?php echo l::get('projectlink') ?></a>
	</article>
</li>