<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

/**
 * API docs - the Swagger UI page
 */

//path: app/Config/Routes.php
$routes->group('api', function($routes) {
$routes->group('v1', function($routes) {
    $routes->get('docs', 'Home::docs');
    $routes->resource('pet');
});
});
