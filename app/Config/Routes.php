<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/hi', 'HomeControlleur::index');
$routes->get('/marque', 'MarquesController::index');
$routes->post('/addMarque','AddMarquesController::index');
