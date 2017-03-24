<ul id="languages"
<?php if($page->isHomePage()): ?>
				class="home"
		<?php endif ?>
> 
<?php foreach($site->languages() as $language): ?>
    <li class="languages">
      <a href="<?php echo $page->url($language->code()) ?>">
        <?php echo html($language->code()) ?>
      </a>
    </li>
<?php endforeach ?>
</ul>