<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Aut::index', ['as' => 'login']);
$routes->get('/recuperar_pass', 'Aut::recuperar_pass');



$routes->group('estudiante', ['filter' => 'authEstudiante'], function($routes) {
    $routes->get('dashboard', 'Usuarios::perfilAlumno',['as' => 'perfil_alumno']);
    $routes->get('perfil', 'Usuarios::perfilAlumno',['as' => 'perfil_alumno']);
});

$routes->group('secretaria', ['filter' => 'authSecretaria'], function($routes) {
    $routes->get('perfil', 'Usuarios::perfilAlumno',['as' => 'perfil_alumno']);
});

$routes->group('admin', ['filter' => 'authAdmin'], function($routes) {
    $routes->get('perfil', 'Usuarios::perfilAlumno',['as' => 'perfil_alumno']);
});

//Rutas comunes
$routes->get('/login', 'Aut::index', ['as' => 'login']);