<!DOCTYPE html>
<html lang="<?php echo $site->language->code() ?>">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="
    <?php if($page->description() != '') : 
        echo $page->description()->html();
        else :
        echo $site->description()->html();
    endif ?>
  ">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/base.css') ?>
  <?php echo css('assets/font-awesome/css/font-awesome.min.css') ?>
  
  <?php if($page->isHomePage()) : ?>
	  <link href='https://fonts.googleapis.com/css?family=Amatic+SC' rel='stylesheet' type='text/css'>
  <?php endif ?>

  <script>
    // Picture element HTML5 shiv
    document.createElement( "picture" );
  </script>
  <script src="<?php echo $site->url() ?>/assets/js/picturefill.js" async></script>

</head>
<body class="<?php echo $page->template() ?>">

<?php if($page->isHomePage()): ?>
    <?php snippet('language_switch') ?>

<?php else : ?>
  <header class="header padding_row" role="banner">
      <?php if ($page->slug() != 'media' && $page->parent()->slug() != 'media' ) :?>
      <?php snippet('menu') ?>
    <?php endif ?>
      <a class="logo hide-on-medium" href="<?php echo $site->language()->url() ?>">
        <img src="<?php echo url('assets/images/logo-invert.png') ?>" alt="<?php echo $site->title()->html() ?>" />
      </a>
  </header>
<?php endif ?>