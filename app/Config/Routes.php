<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('dashboard', 'Dashboard::index');
$routes->get('dashboard/admin', 'Dashboard::admin');
$routes->get('dashboard/new', 'Dashboard::new');
$routes->post('dashboard/create', 'Dashboard::create');
$routes->get('dashboard/(:num)', 'Dashboard::show/$1');
$routes->get('dashboard/edit/(:num)', 'Dashboard::edit/$1');
$routes->get('dashboard/confirm/(:num)', 'Dashboard::confirm/$1');
$routes->get('dashboard/exit/(:num)', 'Dashboard::exit/$1');
$routes->post('dashboard/update/(:num)', 'Dashboard::update/$1');

$routes->get('guardian', 'Guardian::index');
$routes->get('guardian/new', 'Guardian::new');
$routes->post('guardian/create', 'Guardian::create');
$routes->get('guardian/(:num)', 'Guardian::show/$1');
$routes->get('guardian/edit/(:num)', 'Guardian::edit/$1');
$routes->post('guardian/update/(:num)', 'Guardian::update/$1');

$routes->get('department', 'Department::index');
$routes->get('department/new', 'Department::new');

$routes->get('person', 'Person::index');
$routes->get('person/(:num)', 'Person::show/$1'); //wywołanie funkcji show() kontrolera Person
$routes->get('person/new', 'Person::new');
$routes->post('person/create', 'Person::create');
$routes->get('person/edit/(:num)', 'Person::edit/$1');
$routes->post('person/update/(:num)', 'Person::update/$1');

$routes->get('api/guardian', 'Guardian::index');
$routes->get('api/dashboard', 'Dashboard::apiIndex');

$routes->get('dashboard/sendmail', 'Dashboard::sendmail');