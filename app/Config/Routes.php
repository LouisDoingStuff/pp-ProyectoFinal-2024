<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->resource('empleados', ['placeholder' =>'(:num)', 'except' => 'show']);
$routes->resource('categorias', ['placeholder' =>'(:num)', 'except' => 'show']);
$routes->resource('vinos', ['placeholder' =>'(:num)', 'except' => 'show']);
$routes->resource('ventas', ['placeholder' =>'(:num)', 'except' => 'show']);
$routes->resource('facturas', ['placeholder' =>'(:num)', 'except' => 'show']);
$routes->resource('clientes', ['placeholder' =>'(:num)', 'except' => 'show']);
$routes->resource('resenas', ['placeholder' =>'(:num)', 'except' => 'show']);
$routes->resource('proveedores', ['placeholder' =>'(:num)', 'except' => 'show']);


//////////////////Inicio de Sesión///////////////////
$routes->get('ver_login','IniciarSesion::verInicio');
$routes->get('ver_login_clientes','IniciarSesion::verInicioC');
$routes->post('iniciar_sesion','IniciarSesion::iniciarSesion');
$routes->get('cerrar_sesion','IniciarSesion::cerrarSesion');
$routes->get('ver_menu','IniciarSesion::verMenu');
$routes->get('creditos_grupo','IniciarSesion::caratula');
$routes->get('datos_incorrectos','IniciarSesion::datosIncorrectos');

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

//////////////// Vinos/////////////////////////
$routes->get('ver_vn','Vinos::index');
$routes->get('nuevo_vn','Vinos::nuevoVino');
$routes->post('guardar_vn','Vinos::guardarVino');
$routes->get('eliminar_vn/(:num)','Vinos::eliminarVino/$1');
$routes->get('buscar_vn/(:num)','Vinos::buscarVino/$1');
$routes->post('modificar_vn','Vinos::modificarVino');

////////////////Ventas/////////////////////////
$routes->get('ver_vt','Ventas::index');
$routes->get('nueva_vt','Ventas::nuevaVenta');
$routes->post('guardar_vt','Ventas::guardarVenta');
$routes->get('eliminar_vt/(:num)','Ventas::eliminarVenta/$1');
$routes->get('buscar_vt/(:num)','Ventas::buscarVenta/$1');
$routes->post('modificar_vt','Ventas::modificarVenta');

////////////////Facturas/////////////////////////
$routes->get('ver_ft','Facturas::index');
$routes->get('nueva_ft','Facturas::nuevaFactura');
$routes->post('guardar_ft','Facturas::guardarFactura');
$routes->get('eliminar_ft/(:num)','Facturas::eliminarFactura/$1');
$routes->get('buscar_ft/(:num)','Facturas::buscarFactura/$1');
$routes->post('modificar_ft','Facturas::modificarFactura');

////////////////Clientes/////////////////////////
$routes->get('ver_cl','Clientes::index');
$routes->get('nuevo_cl','Clientes::nuevoCliente');
$routes->post('guardar_cl','Clientes::guardarCliente');
$routes->get('eliminar_cl/(:num)','Clientes::eliminarCliente/$1');
$routes->get('buscar_cl/(:num)','Clientes::buscarCliente/$1');
$routes->post('modificar_cl','Clientes::modificarCliente');

////////////////Proveedor/////////////////////////
$routes->get('ver_pv','Proveedores::index');
$routes->get('nuevo_pv','Proveedores::nuevoProveedor');
$routes->post('guardar_pv','Proveedores::guardarProveedor');
$routes->get('eliminar_pv/(:num)','Proveedores::eliminarProveedor/$1');
$routes->get('buscar_pv/(:num)','Proveedores::buscarProveedor/$1');
$routes->post('modificar_pv','Proveedores::modificarProveedor');

////////////////Resenas//////////////////////////
$routes->get('ver_rs','Resenas::index');
$routes->get('ver_rsC','Resenas::indexC');
$routes->get('nueva_rs','Resenas::nuevaResena');
$routes->get('nueva_rsc','Resenas::nuevaResenaC');
$routes->post('guardar_rs','Resenas::guardarResena');
$routes->get('eliminar_rs/(:num)','Resenas::eliminarResena/$1');
$routes->get('buscar_rs/(:num)','Resenas::buscarResena/$1');
$routes->get('buscar_rsc/(:num)','Resenas::buscarResenaC/$1');
$routes->post('modificar_rs','Resenas::modificarResena');
$routes->post('guardar_rsc','Resenas::guardarResenaC');
$routes->post('modificar_rsc','Resenas::modificarResenaC');
