<?php snippet('header') ?>

<div class="row">
	<?php if ($page->slider() != '') snippet('background',['photos'=>$page->slider()]) ?>
</div>
<?php snippet('separator') ?>
<article class="main <?php echo $page->template() ?> padding_row animated" role="main">
	<ul class="grid">
		<?php foreach ($page->children()->visible() as $p) : ?>
			<li>
				<figure>
					<?php foreach ($p->images() as $image) : ?>
						<img src="<?php echo $image->url() ?>" />
					<?php endforeach ?>
					<figcaption>
						<h3><?php echo $p->title()->html() ?></h3>
						<p>After his studies and stay in the USA, Christian Pankratz accompanied the sporting goods manufacturer Rollerblade throughout the inline skate euphoria of the early 90s. This was followed by a five-year position at Bauer and Nike, supporting numerous DEL (German Ice Hockey) clubs and national teams as well as national sales & distribution activities. For m</p>
					</figcaption>
					</figure>
					<div class="infos">
						<h3><?php echo $p->title()->html() ?></h3>
						<table>
							<tr>
								<td>Fon:</td>   
								<td><?php echo $p->fon()->html() ?></td>
							</tr>
							<tr>
								<td>Fax:</td>   
								<td><?php echo $p->fax()->html() ?></td>
							</tr>
							<tr>
								<td>Mobil:</td>
								<td><?php echo $p->mobil()->html() ?></td>
							</tr>
							<tr>
								<td colspan="2">Email <a href="mailto:<?php echo $p->email()->html() ?>" title="<?php echo $p->email()->html() ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a></td> 
							</tr>
						</table>
					</div>
				</li>
	<?php endforeach ?>
	<div style="clear: both;"></div>
</article>

<?php snippet('footer') ?>