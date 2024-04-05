<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/blog/(:segment)', 'Home::post/$1');


$routes->get('admin/login', 'AdminController::login');
$routes->post('admin/login', 'AdminController::authenticate');
$routes->get('admin/logout', 'AdminController::logout');
$routes->post('admin/register', 'AdminController::save');
$routes->get('admin/signup', 'AdminController::register');

$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    $routes->get('/', 'AdminController::index');
    $routes->get('posts', 'PostController::posts');
    $routes->get('post/add', 'PostController::add');
    $routes->post('post/add', 'PostController::save');
    $routes->get('post/delete/(:num)', 'PostController::delete/$1');
    $routes->get('post/edit/(:num)', 'PostController::edit/$1');
    $routes->post('post/update', 'PostController::update');
});

