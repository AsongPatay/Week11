<?php

namespace Config;

use CodeIgniter\Routing\RouteCollection;

$routes = Services::routes();

$routes->get('/', 'SecurityLab::index');
$routes->post('securitylab/submit', 'SecurityLab::submit');
