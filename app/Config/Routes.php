<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/product/sfaclm', 'Product::sfaclm');
$routes->get('/product/dms', 'Product::dms');
$routes->get('/product/directtodoctor', 'Product::directtodoctor');
$routes->get('/product/hcpengagement', 'Product::hcpengagement');
$routes->get('/product/productcompliance', 'Product::productcompliance');
$routes->get('/product/alltrack', 'Product::alltrack');

$routes->get('/company/about', 'Company::about');
$routes->get('/company/blog', 'Company::blog');
$routes->get('/company/contact', 'Company::contact');
$routes->get('/company/privacypolicy', 'Company::privacypolicy');
$routes->get('/company/termsandcondition', 'Company::termsandcondition');
