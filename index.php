<?php

$f3=require('lib/base.php');

$f3->config('api/config.ini');

$f3->set('AUTOLOAD','api/; map/;');

$f3->route('GET /api/locate', 'Locate->call_number');
$f3->route('GET /api/locate/@location/@callno', 'Locate->call_number');
$f3->route('GET /api/locate/@barcode', 'Locate->barcode');

//$f3->route('GET /map/@floor/@row', 'Map->draw');
$f3->route('GET /map/@library/@floor/@row', function($f3, $params) {
        $template_path = 'map/' . $params['library'] . '/' . $params['floor'] . '.php';
        $f3->set('library',$params['library']);
        $f3->set('floor',$params['floor']);
        $f3->set('row',$params['row']);
        //echo $template_path;
        $view=new View;
        echo $view->render($template_path);
    }
);

$f3->run();

?>