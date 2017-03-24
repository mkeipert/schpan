<?php if(!defined('KIRBY')) exit ?>

title: Projekt
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
  projectname:
    label: Name des Projekts
    type: text
  projectclient:
    label: Auftraggeber
    type: text
  projectcontent:
    label: Inhalt
    type:  text 
  text:
  	label: Beschreibung des Projektes
  	type: textarea
  slider:
    label: Photo slider
    help: Choose photos to show at the top of the page.
    type:  selector
    mode:  multiple
    types:
      - image
  category:
    label: Zuordnung zum Leistungsspektrum
    type: checkboxes 
    options: 
        s-p-consulting: s-p-consulting 
        s-p-evaluations: s-p-evaluations
        s-p-concepts: s-p-concepts
        s-p-operations: s-p-operations
