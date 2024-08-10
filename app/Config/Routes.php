<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'Order::index');

$routes->get('/delivery', 'Delivery::index');

$routes->post('/delivery/save-payment-courier', 'Delivery::savePaymentCourier');

$routes->get('/shipping', 'Shipping::index');

$routes->get('/product/(:num)', 'Product::detail/$1');

$routes->post('/shipping/save-personal-info', 'Shipping::savePersonalInfo');

$routes->get('/checkout/(:num)', 'Checkout::index/$1');

$routes->post('/checkout/add-to-cart', 'Checkout::addToCart');

$routes->post('/checkout/checkout-order', 'Checkout::checkoutOrder');