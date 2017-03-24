<?php if(!defined('KIRBY')) exit ?>

title: Startseite
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
  slider:
    label: Photo slider
    help: Choose photos to show at the top of the page.
    type:  selector
    mode:  multiple
    types:
      - image
  relatedPage:
    label: Weiterverlinkung auf Seite
    type: page
  relatedPageLabel:
  	label: Bezeichnung des Links
  	type: text 