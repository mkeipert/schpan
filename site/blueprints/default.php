<?php if(!defined('KIRBY')) exit ?>

title: Standardseite
pages: true
files:
  sortable: true
  fields:
    title:
      label: Title
      type: text
fields:
  title:
    label: Title
    type:  text
  description:
  	label: Beschreibung
  	help: Ca. 160 Zeichen, die den Inhalt dieser Seite beschreiben - ideal für Suchmaschinen!
  	type: textarea 
  	buttons: no
  text_left:
    label: Text links
    type:  markdown
  text_right: 
  	label: Text rechts 
  	type: markdown
  slider:
    label: Photo slider
    help: Choose photos to show at the top of the page.
    type:  selector
    mode:  multiple
    types:
      - image