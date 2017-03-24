<nav role="navigation">

  <ul id="menu" class="menu">
    <?php foreach($pages->visible() as $p): ?>
    <li <?php e($p->isOpen(), ' class="active"') ?> >
      <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>

      <?php if($p->hasVisibleChildren()): ?>
      <ul class="submenu">
        <?php foreach($p->children()->visible() as $p): ?>
        <li>
          <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
            <?php if($p->hasVisibleChildren()) : ?>
              <ul class="subsubmenu">
                <?php foreach($p->children()->visible() as $p): ?>
                <li>
                  <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
                  </li>
                <?php endforeach ?>
              </ul>
            <?php endif ?>
        </li>
      <?php endforeach ?>
      </ul>
      <?php endif ?>

    </li>
    <?php endforeach ?>
    <?php if($user = $site->user()): ?>
    <li>
      <a href="<?php echo url('logout') ?>">Logout</a>
    </li>
    <?php endif ?>
  </ul>

 <?php snippet('submenu') ?>

</nav>
