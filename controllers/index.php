<?php

$tasks = $app['database']->fetchAll('Todos', 'Task');


require 'views/index.view.php';