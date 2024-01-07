<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


// Users
$routes->get('/', 'Index::index');
$routes->get('/login', 'Auth::login');
$routes->get('/register', 'Auth::register');
$routes->post('/doLogin', 'Auth::doLogin');
$routes->post('/doRegister', 'Auth::doRegister');
$routes->get('/logout', 'Auth::logout');
$routes->get('/profile', 'Profile::index');
$routes->post('/update', 'Profile::update');
$routes->get('/payment/(:num)', 'Payment::index/$1');
$routes->post('/payments', 'Payment::payment');
$routes->get('/progress/(:num)', 'Progress::index/$1');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/admin/course/(:num)', 'Dashboard::course/$1');
$routes->post('/admin/update_course/(:num)', 'Dashboard::update_course/$1');