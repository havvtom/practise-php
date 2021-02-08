<?php

$app = [];

$app['config'] = require 'config.php';

require 'database/QueryBuilder.php';

require 'database/Connection.php';

require 'functions.php';

require 'Task.php';

require 'Router.php';

require 'Request.php';

$app['database'] = new QueryBuilder(Connection::make($app['config']));






