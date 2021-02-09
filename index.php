<?php

require 'vendor/autoload.php';

require 'core/bootstrap.php';

$router = new Router;

require 'routes.php';

$users = App::get('database')->fetchAll('users');

Router::load('routes.php')->direct(Request::uri(), Request::method());