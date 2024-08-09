<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'Order::index');

$routes->get('/delivery', 'Delivery::index');

$routes->get('/shipping', 'Shipping::index');

$routes->post('/shipping/save-personal-info', 'Shipping::savePersonalInfo');

$routes->get('/checkout/(:num)', 'Checkout::index/$1');

$routes->post('/checkout/checkout-order', 'Checkout::checkoutOrder');