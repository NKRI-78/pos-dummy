<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'Home::index');

$routes->get('/cart/(:num)', 'Cart::index/$1');

$routes->get('/my-orders', 'Order::index');

$routes->get('/shipping/(:num)', 'Shipping::index/$1');

$routes->get('/profile', 'Profile::index');