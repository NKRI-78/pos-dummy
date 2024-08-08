<?php

use CodeIgniter\Router\RouteCollection;

// $routes->get('/', 'Home::index');

$routes->get('/', 'Order::index');

$routes->get('/shipping/(:num)', 'Shipping::index/$1');

$routes->get('/checkout/(:num)', 'Checkout::index/$1');