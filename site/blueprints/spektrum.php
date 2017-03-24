<?php if(!defined('KIRBY')) exit ?>

title: Leistungsspektrum - Bestandteil
pages: false
files:
  sortable: true
  fields:
    title:
      label: Title
      type: text
fields:
  title:
    label: Name
    type:  text
  text:
    label: Beschreibung
    type:  textarea
  iconStandard:
    type: image
    label: Icon (Normalansicht)
  iconHover:
    type: image
    label: Icon (Mouseover)
  iconHigh:
    type: image