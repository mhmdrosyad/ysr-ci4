<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/post', 'Home::post');
$routes->get('/admin', 'AdminController::index');
$routes->get('/admin/post/add', 'AdminController::post');
$routes->get('/login', 'AdminController::login');
$routes->get('/signup', 'AdminController::register');