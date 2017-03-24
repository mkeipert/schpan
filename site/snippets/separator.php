<div class="separator">
	<div class="inner">
		<?php snippet('social') ?>
		<?php if ($page->template()=='start') : ?>
			<?php if($page->relatedPage() != '') snippet('relatedpage') ?>
		<?php else : ?>
			<?php if($page->template()!= 'map' && $page->template()!= 'leistungsspektrum') : ?>	
				<div id="tobottom">
					<i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
				</div>
		<?php endif ?>
		<?php endif ?>
	</div>
</div>
