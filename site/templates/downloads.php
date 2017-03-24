<?php snippet('header') ?>

<article class="main download" role="main">

    <div class="text inner">
      <?php if($user = $site->user()): ?>
      <h2><?php echo $page->title()->html() ?></h2>
      <?php echo $page->text()->kirbytext() ?>
      <?php
      	$dir = $site->user()->username();
      	$files = $pages->find('clients')->children()->find($dir)->files();  
      ?>
      <ul>
      <?php foreach($files as $file) : ?>
      	<li>
          <a href="<?php echo $file->url(); ?>">
      		  <img style="width: 32px;" width="16" height="16" 
      		  src="../assets/images/icons/<?php echo $file->extension() ?>.png" />
      		  <?php echo $file->name(); ?> 
      		  (<span><?php echo $file->extension(); ?></span>, <?php echo $file->niceSize() ?>)
      		</a>
        </li>
      <?php endforeach ?>
      </ul>
  	<?php endif ?>
    </div>
</article>

<?php snippet('footer') ?>