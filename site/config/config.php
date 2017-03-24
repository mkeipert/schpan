<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'put your license key here');
c::set('debug', true);

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options


---------------------------------------
Language Configuration
---------------------------------------

*/

c::set('languages', array(
  array(
    'code'    => 'en',
    'name'    => 'English',
    'locale'  => 'en_US',
    'url'     => '/en',
  ),
  array(
    'code'    => 'de',
    'name'    => 'Deutsch',
	  'default' => true,
    'locale'  => 'de_DE',
    'url'     => '/',
  ),
));
c::set('language.detect', true);

/*
---------------------------------------
User Configuration
---------------------------------------
*/

c::set('roles', array(
  array(
    'id'      => 'admin',
    'name'    => 'Admin',
    'panel'   => true
  ),
  array(
    'id'      => 'client_1',
    'name'    => 'Client (CI)',
    'panel'   => false,
    'default'  => true
  ),
  array(
    'id'      => 'client_2',
    'name'    => 'Client (blank)',
    'panel'   => false
  )
));

kirby()->hook('panel.user.create', function($user) {
  $newPage = page('clients')->children()->create($user->username(), 'default', array(
      'title' => $user->username()
    ));
});

c::set('routes', array(
  array(
    'pattern' => 'logout',
    'action'  => function() {
      if($user = site()->user()) $user->logout();
      go('download');
    }
  )
));