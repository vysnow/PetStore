<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

/**
 * API docs - the Swagger UI page
 */
$routes->get('/api/v1/docs', 'Home::docs');
