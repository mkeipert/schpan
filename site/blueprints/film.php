<?php if(!defined('KIRBY')) exit ?>

title: Film
pages: true
files: false
fields:
  title:
    label: Title
    type:  text
  description:
  	label: Beschreibung
  	help: Ca. 160 Zeichen, die den Inhalt dieser Seite beschreiben - ideal für Suchmaschinen!
  	type: textarea 
  	buttons: no
  youtube:
    label: Youtube ID
    type: text