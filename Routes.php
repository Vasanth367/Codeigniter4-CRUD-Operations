<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->add('/', 'Home::index');
$routes->add('/student_form', 'Home::student_form');
// $routes->add('/view', 'Home::view');
$routes->add('/create', 'Home::create');
$routes->add('/delete/(:any)', 'Home::delete/$1');
$routes->add('/edit/(:any)', 'Home::edit/$1');
$routes->add('/update', 'Home::update');

// $routes->get('/edit/(:num)', 'Home::edit/$1');
// $routes->post('/update', 'Home::update');










