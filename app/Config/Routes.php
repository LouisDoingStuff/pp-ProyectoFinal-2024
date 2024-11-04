<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->resource('empleados', ['placeholder' =>'(:num)', 'except' => 'show']);
$routes->resource('categorias', ['placeholder' =>'(:num)', 'except' => 'show']);


///////////////Categorías/////////////////////
$routes->get('ver_cat','Categorias::index');
$routes->get('nueva_cat','Categorias::nuevaCategoria');
$routes->post('guardar_cat','Categorias::guardarCategoria');
$routes->get('eliminar_cat/(:num)','Categorias::eliminarCategoria/$1');
$routes->get('buscar_cat/(:num)','Categorias::buscarCategoria/$1');
$routes->post('modificar_cat','Categorias::modificarCategoria');

///////////////Empleados//////////////////////
$routes->get('ver_ep','Empleados::index');
$routes->get('nuevo_ep','Empleados::nuevoEmpleado');
$routes->post('guardar_ep','Empleados::guardarEmpleado');
$routes->get('eliminar_ep/(:num)','Empleados::eliminarEmpleado/$1');
$routes->get('buscar_ep/(:num)','Empleados::buscarEmpleado/$1');
$routes->post('modificar_ep','Empleados::modificarEmpleado');
