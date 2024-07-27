<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/employee', 'Employee::index');

$routes->get('/employee/view/(:num)', 'Employee::view/$1');
$routes->get('/employee/create', 'Employee::create');
$routes->post('/employee/store', 'Employee::store');
$routes->get('/employee/edit/(:num)', 'Employee::edit/$1');
$routes->put('/employee/update/(:num)', 'Employee::update/$1');
$routes->delete('/employee/delete/(:num)', 'Employee::delete/$1');