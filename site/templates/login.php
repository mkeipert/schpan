<?php snippet('header') ?>

<article class="main download" role="main">
<div class="inner">
<h2><?php echo $page->title()->html() ?></h2>
<?php if($error): ?>
<div class="alert"><?php echo $page->alert()->html() ?></div>
<?php endif ?>
<form method="post">
  <div>
    <label for="username"><?php echo $page->username()->html() ?></label>
    <input type="text" id="username" name="username">
  </div>
  <div>
    <label for="password"><?php echo $page->password()->html() ?></label>
    <input type="password" id="password" name="password">
  </div>
  <div class="submit">      
    <input type="submit" name="login" value="<?php echo $page->button()->html() ?>">
  </div>
</form>
</div>
</article>
<?php snippet('footer') ?>
