<?php snippet('header') ?>

<div class="row">
	<?php if ($page->slider() != '') snippet('background',['photos'=>$page->slider()]) ?>
</div>
<?php snippet('separator') ?>

<article class="main <?php echo $page->template() ?>" role="main">
	<div class="mainInfo">
		<h2><?php echo $page->Projectname()->html() ?></h2>
		<p><strong><?php echo l::get('client') ?></strong>: <?php echo $page->Projectclient()->html() ?></p>
		<p><strong><?php echo l::get('content') ?></strong>: 	<?php echo $page->Projectcontent()->kirbytext() ?></p>
		<?php echo $page->text()->kirbytext(); ?>
		<a class="film_link" href="#" title="<?php echo l::get('movie') ?>">
			<i class="fa fa-video-camera fa-2x" aria-hidden="true"></i>
		</a>

	</div>
	<div class="sidebar">
		<div class="projectnav">
			<?php 
				$cat = $_GET['cat'];
				//$client = $_GET['client'];
		?>
			<div class="inner">
			<h3><?php // echo $catLabel ?>: <?php echo l::get('projectnav_headline') ?></h3>
			<ul>
				<?php // foreach ($catItems as $p) : ?>
				<li>
					<a href="<?php // echo $p->url() ?>?cat=<?php // echo $cat?>" title?"<?php // echo $p->title()->html() ?>">
					<?php // echo $p->title()->html(); ?>
					</a>
				</li>
				<?php // endforeach ?> -->
			</ul>
			</div>
		</div>
		<div class="sideInfo">
			<div class="inner">
				Hier folgt weiterer Text...
			</div>
		</div>
	</div>
	<div style="clear:both;"></div>
</article>


<?php snippet('footer') ?>
