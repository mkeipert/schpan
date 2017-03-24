<?php if(!defined('KIRBY')) exit ?>

title: Leistungsspektrum Übersichtsseite
pages: true
  template: spektrum
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
  info:
    label: Info
    type: info
    text: >
      Auf den Unterseiten dieser Seiten werden die jeweiligen Leistungsbestandteile beschrieben.


