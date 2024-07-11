<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/register', 'Home::register');
$routes->post('/register', 'Home::register');

$routes->get('/login', 'Home::login');
$routes->post('/login', 'Home::login');

$routes->get('/logout', 'Home::logout');

$routes->get('/profile', 'Home::profile');
$routes->post('/profile', 'Home::profile');


$routes->get('/weather', 'Home::weather');
$routes->get('/matches', 'Home::matches');




$routes->get('/players_list', 'PlayerController::index');


$routes->get('/news', 'NewsController::index');

$routes->get('/contact_form', 'Home::contact_form----');

$routes->get('/user_dashboard', 'DashboardController::user_dashboard');

$route['ajax/getData'] = 'AjaxController/getData';

// application/config/routes.php
$route['map'] = 'map/index';
$routes->get('/map_view', 'Map::map_view');

$routes->get('/one', 'Home::one');
$routes->get('purchase/buyTicket/(:segment)/(:segment)', 'PurchaseController::buyTicket/$1/$2');
$routes->post('purchase/processPurchase', 'PurchaseController::processPurchase');
	




