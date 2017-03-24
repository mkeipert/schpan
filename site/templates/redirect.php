<?php 

$url = $page->children()->visible()->first()->url();

go($url);

?>