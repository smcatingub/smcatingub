<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

use App\Controllers\Guest;
use App\Controllers\News;
use App\Controllers\Pages;

$routes->get('guest', [Guest::class, 'index']);
$routes->get('guest/new', [Guest::class, 'new']);
$routes->post('guest', [Guest::class, 'create']);

$routes->get('news', [News::class, 'index']);
$routes->get('news/new', [News::class, 'new']);

$routes->post('news', [News::class, 'create']);           
$routes->get('news/(:segment)', [News::class, 'show']); 

$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);