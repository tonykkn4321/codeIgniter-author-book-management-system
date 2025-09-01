<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// RESTful routes for authors and books
$routes->resource('authors');
$routes->resource('books');
