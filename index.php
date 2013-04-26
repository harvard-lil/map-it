<?php

$f3=require('lib/base.php');

$f3->config('api/config.ini');

$db = $f3->get('DB');
$db_user = $f3->get('DB_USER');
$db_password = $f3->get('DB_PASSWORD');
$db_host = $f3->get('DB_HOST');
        
mysql_connect($db_host, $db_user, $db_password)
or die ("Could not connect to resource");
  
mysql_select_db($db)
or die ("Could not connect to database");

$key_query  = "SELECT * FROM book_locator.key_lookup";
      
$result = mysql_query($key_query);
      
while($row = mysql_fetch_row($result)) {
  $map_it_key = $row[1];
}

$f3->set('map_it_key',$map_it_key);

$f3->set('AUTOLOAD','api/; web/;');

$f3->route('GET /api/locate', 'Locate->call_number');
$f3->route('GET /api/locate/@location/@collection/@callno', 'Locate->call_number');
$f3->route('GET /api/locate/barcode', 'Locate->barcode');

$f3->route('GET /api/admin/display/@library', 'Admin->display');
$f3->route('POST /api/admin/delete', 'Admin->delete');
$f3->route('POST /api/admin/create', 'Admin->create');
$f3->route('GET /api/admin/create/barcode', 'Admin->create_with_barcode');
$f3->route('POST /api/admin/update/callno', 'Admin->update_callno');
$f3->route('POST /api/admin/update/floor', 'Admin->update_floor');
$f3->route('POST /api/admin/update/row', 'Admin->update_row');
$f3->route('POST /api/admin/update/collection', 'Admin->update_collection');

//$f3->route('GET /map/@floor/@row', 'Map->draw');
$f3->route('GET /map/@library/@floor/@row', function($f3, $params) {
    $template_path = 'web/maps/' . $params['library'] . '/' . $params['floor'] . '.php';
    $f3->set('library',$params['library']);
    $f3->set('floor',$params['floor']);
    $f3->set('row',$params['row']);
    $f3->set('www_root',$f3->get('MAP_IT_HOME'));

    $view=new View;
    echo $view->render($template_path);
});

$f3->route('GET /admin', function($f3) {
    $f3->set('key',$f3->get('map_it_key'));
    $f3->set('user',$f3->get('ADMIN_USER'));
    $f3->set('password',$f3->get('ADMIN_PASSWORD'));
    $view=new View;
    echo $view->render('web/data.html');
});

$f3->route('GET /admin/data', function($f3) {
    $f3->set('key',$f3->get('map_it_key'));
    $f3->set('user',$f3->get('ADMIN_USER'));
    $f3->set('password',$f3->get('ADMIN_PASSWORD'));
    $view=new View;
    echo $view->render('web/data.html');
});

$f3->route('GET /admin/app', function($f3) {
    $f3->set('key',$f3->get('map_it_key'));
    $f3->set('user',$f3->get('ADMIN_USER'));
    $f3->set('password',$f3->get('ADMIN_PASSWORD'));
    $view=new View;
    echo $view->render('web/app.html');
});

$f3->route('GET /admin/check', function($f3) {
    $f3->set('key',$f3->get('map_it_key'));
    $f3->set('user',$f3->get('ADMIN_USER'));
    $f3->set('password',$f3->get('ADMIN_PASSWORD'));
    $view=new View;
    echo $view->render('web/check.html');
});

$f3->run();

?>