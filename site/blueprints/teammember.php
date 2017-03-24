<?php if(!defined('KIRBY')) exit ?>

title: Mitarbeiter
pages: true
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
  Fon:
    label: Telefon
    type: text 
    width: 1/2
  Fax:
    label: Telefax
    type: text
    width: 1/2
  Mobil:
    label: Mobil
    type: text
    width: 1/2
  Email:
    label: E-Mail
    type: text
    width: 1/2
  Text:
    label: Text
    type: textarea