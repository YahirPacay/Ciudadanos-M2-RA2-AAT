<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//academicos
$routes->get('/nivelacad', 'ConNivelesAcademicos::index'); 
$routes->get('/nuevo_nivel_acad','ConNivelesAcademicos::nuevoNivelAcademico');
$routes->post('/agregar_nivel_acad','ConNivelesAcademicos::agregarNivelAcad');
$routes->get('/eliminar_nivel_acad/(:num)','ConNivelesAcademicos::eliminarNivelesAcademicos/$1');
$routes->get('/buscar_nivel_academico/(:num)','ConNivelesAcademicos::buscarNivelAcademico/$1');
$routes->post('/modificar_nivel_acad','ConNivelesAcademicos::modificarNivelAcademico');

//regiones
$routes->get('/regiones', 'ConRegiones::verRegiones');
$routes->get('/nuevo_region','ConRegiones::nuevoRegion');
$routes->post('/agregar_region','ConRegiones::agregarRegion');
$routes->get('/eliminar_region/(:num)','ConRegiones::eliminarRegion/$1');
$routes->get('/buscar_region/(:num)','ConRegiones::buscarRegion/$1');
$routes->post('/modificar_region','ConRegiones::modificarRegion');

// departamentos
$routes->get('/departamentos', 'ConDeps::verDeps');
$routes->get('/nuevo_departamento','ConDeps::nuevoDepto');
$routes->post('/agregar_departamento','ConDeps::agregarDepto');
$routes->get('/eliminar_depto/(:num)','ConDeps::eliminarDepto/$1');
$routes->get('/buscar_departamento/(:num)','ConDeps::buscarDepto/$1');
$routes->post('/modificar_departamento','ConDeps::modificarDepto');

//municipios
$routes->get('/municipios', 'ConMuni::verMunicipio');
$routes->get('/nuevo_municipio','ConMuni::nuevoMunicipio');
$routes->post('/agregar_municipio','ConMuni::agregarMunicipio');
$routes->get('/eliminar_municipio/(:num)','ConMuni::eliminarMunicipio/$1');
$routes->get('/buscar_municipio/(:num)','ConMuni::buscarMunicipio/$1');
$routes->post('/modificar_municipio','ConMuni::modificarMunicipio');

//ciudadanos
$routes->get('/ciudadanos', 'ConCiudadanos::verCiudadanos');
$routes->get('/nuevo_ciudadano','ConCiudadanos::nuevoCiudadano');
$routes->post('/agregar_ciudadano','ConCiudadanos::agregarCiudadano');
$routes->get('eliminar_ciudadano/(:num)','ConCiudadanos::eliminarCiudadano/$1');
$routes->get('/buscar_ciudadano/(:num)','ConCiudadanos::buscarCiudadano/$1');
$routes->post('/modificar_ciudadano','ConCiudadanos::modificarCiudadano');