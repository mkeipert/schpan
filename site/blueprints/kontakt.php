<?php if(!defined('KIRBY')) exit ?>

title: Kontakt
pages: false
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
  text:
    label: Text 
    type:  markdown
  slider:
    label: Photo slider
    help: Choose photos to show at the top of the page.
    type:  selector
    mode:  multiple
    types:
      - image