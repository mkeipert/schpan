<?php
$items = false;
if($root = $pages->findOpen()) {
  $items = $root->children()->visible();
}
if($items and $items->count()):
?>

  <ul id="submenu" class="menu">
    <?php foreach($items as $item): ?>
    <li <?php e($item->isOpen(), ' class="active"') ?>>
    	<a href="<?php echo $item->url() ?>"><?php echo $item->title()->html() ?></a>
    </li>
    <?php endforeach ?>
  </ul>
<?php endif ?>

<?php
$items = false;
if($root1 = $pages->findOpen()) {
  if($root2 = $root1->children()->findOpen()) {
    $items = $root2->children()->visible();
  }
}
if($items and $items->count() and $page->template()!="team"):
?>
  <ul id="subsubmenu" class="menu">
    <?php foreach($items as $item): ?>
    <li <?php e($item->isOpen(), ' class="active"') ?>>
    	<a href="<?php echo $item->url() ?>"><?php echo $item->title()->html() ?></a></li>
    <?php endforeach ?>
  </ul>
<?php endif ?>

