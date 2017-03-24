<?php snippet('header') ?>

<div class="center-parent">
	<div class="center-child">
		<div id="logo"> 
			<h1>Schillinger & Pankratz</h1>
			<a href="<?php echo $pages->find('start')->url() ?>">
        	<img src="<?php echo url('assets/images/logo-invert.png') ?>" alt="<?php echo $site->title()->html() ?>" />
        	</a>
		</div>  
		<div id="questions">
			<a href="#" id="toggleElevator"><i id="navToggle" class="fa fa-question-circle" aria-hidden="true"></i></a>
		</div>
	</div>
</div>

<?php snippet('social') ?>

<?php snippet('elevator') ?>
<?php snippet('footer') ?>
