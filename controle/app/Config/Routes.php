<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Vendas::index');
$routes->get('vendas', 'Vendas::index');
$routes->get('vendas/create', 'Vendas::create');
$routes->post('vendas/store', 'Vendas::store');
$routes->get('vendas/edit/(:num)', 'Vendas::edit/$1');
$routes->post('vendas/update', 'Vendas::update');
$routes->get('vendas/delete/(:num)', 'Vendas::delete/$1');
