<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index',['filter' => 'Tamu']);
$routes->post('/', 'Login::index');
$routes->post('login', 'Login::index');
$routes->get('keluarga/logout', 'Data::logout');
$routes->get('keluarga', 'Data::index',['filter' => 'User']);

$routes->get('login', 'Login::index',['filter' => 'Tamu']);



$routes->get('keluarga/hapus/(:num)', 'Data::hapus/$1');
$routes->get('keluarga/edit/(:num)', 'Data::edit/$1');
$routes->post('keluarga/simpan', 'Data::simpan');