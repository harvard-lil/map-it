<?php

$f3=require('lib/base.php');

$f3->config('api/config.ini');

$f3->set('AUTOLOAD','api/;');

$f3->route('GET /api/locate', 'Locate->call_number');
$f3->route('GET /api/locate/@location/@callno', 'Locate->call_number');
$f3->route('GET /api/locate/@barcode', 'Locate->barcode');

$f3->run();

?>