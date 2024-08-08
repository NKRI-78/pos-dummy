<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/refferal/(:any)', 'Home::refferal/$1');

$routes->get('/auth/login', 'Login::login');
$routes->post('/auth/login', 'Login::store');
$routes->get('/auth/register', 'Login::register');
$routes->post('/auth/register', 'Login::postRegister');

$routes->get('/cart/(:num)', 'Cart::index/$1');

$routes->get('/about-us', 'AboutUs::index');

$routes->get('/how-to-use', 'HowToUse::index');