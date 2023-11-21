<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/hi', 'HomeControlleur::index');
$routes->get('/marques', 'MarquesController::listeDesMarques');
$routes->get('/marques/ajout','MarquesController::obtenirFormulaireAjout');
$routes->post('/marques/ajout','MarquesController::addMarque');
$routes->get('/marques/delete/(:num)', 'MarquesController::deleteMarque/$1');

