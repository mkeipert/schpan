<?php

return function($site, $pages, $page) {

  $projects = $page->children()->visible();

  return compact('projects');

};