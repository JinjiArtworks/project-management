<?php
use CodeIgniter\Router\RouteCollection;
use Config\Services;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/dashboard', 'Dashboard::index');
// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
// $routes->get('/unauthorized', 'Login::index');
$routes = Services::routes();
// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// $routes->setAutoRoute(true);


// $routes->group('dashboard', ['namespace' => 'App\Controllers\Client'], function ($routes) {
    $routes->get('/dashboard', 'Dashboard::index');
    $routes->get('detail-ticket', 'Dashboard::detailTicket');
// });

$routes->group('my-request', ['namespace' => 'App\Controllers\Client'], function ($routes) {
    $routes->get('/', 'MyRequest::index');
});

$routes->group('history-ticket', ['namespace' => 'App\Controllers\Client'], function ($routes) {
    $routes->get('/', 'History::index');
});

$routes->group('admin-dashboard', ['namespace' => 'App\Controllers\Admin'], function ($routes) {
    $routes->get('/', 'AdminDashboard::index');
    $routes->get('list-company/(:any)', 'AdminDashboard::listCompany/$1', );
});

$routes->get('login', 'Login::index');
$routes->post('loginAction', 'Login::loginAction', ['as' => 'login.loginAction']);
$routes->get('logout', 'Login::logoutAction', ['as' => 'login.logoutAction']);


$routes->get('register', 'Register::index');
$routes->post('registerAction', 'Register::registerAction', ['as' => 'register.registerAction']);
