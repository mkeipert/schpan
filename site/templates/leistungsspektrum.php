<?php snippet('header') ?>

<div class="row">
	<article class="intro">
		<?php echo $page->text()->kirbytext() ?>
	</article>
	<ul class="grid clearfix">
		<?php foreach($page->children()->sortBy('title','asc') as $item) : ?>
  			<li class="column medium-4 spektrum" id="<?php echo $item->slug() ?>">
  				<a href="#<?php echo $item->slug() ?>">
	  				<figure>
		  				<img src="<?php echo $item->contentURL() ?>/<?php echo $item->iconHover() ?>" />
		  				<img src="<?php echo $item->contentURL() ?>/<?php echo $item->iconStandard() ?>" />
		  			</figure>
		  		</a>
	  		</li>
		<?php endforeach ?>
	</ul>
	<div id="stage" > 	
		<?php foreach($page->children() as $item) : ?>

			<?php 
				$cat = $item->slug();
				$catItem = $pages->find('projects')->children()->filterBy('category', $cat, ',')->shuffle()->first();
			?>


			<div class="displayInfo clearfix" id="<?php echo $item->slug() ?>">
				<div class="column medium-4">
					<figure><img src="<?php echo $item->contentURL() ?>/<?php echo $item->iconHigh() ?>" alt="Test"/></figure>
				</div>
				<div class="column medium-8">
					<?php echo $item->text()->kirbytext() ?>
					<a href="<?php echo $catItem->url() ?>?cat=<?php echo $cat ?>">Projekte</a>
				</div>
			</div>
		<?php endforeach ?>
	</div>
</div>
<?php snippet('separator') ?>
<?php snippet('footer') ?>))