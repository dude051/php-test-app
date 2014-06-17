<?php
require 'vendor/autoload.php';

// Database Config
$DBConfig = Array('host' => '', 'username' => '', 'password' => '', 'db_name' => '');


$app = new \Slim\Slim(array(
    'templates.path' => './templates'
));

$app->get('/service/checks', function () use($app) {
    $app->view()->setData(array('message' => "This is all of our checks"));
    $app->render('home.php');

});

$app->get('/service/checks/:id', function ($id) use($app) {
    $app->view()->setData(array('message' => "This is check ".$id));
    $app->render('home.php');
});

$app->get('/service/checks/:id/status', function ($id) use($app) {
    $app->view()->setData(array('message' => "This is the status of check ".$id));
    $app->render('home.php');
});

$app->get('/service/checks/:id/execute', function ($id) use($app) {
    $app->view()->setData(array('message' => "Executing check ".$id));
    $app->render('home.php');
});

$app->post('/service/checks/add', function () use($app) {
    $app->view()->setData(array('message' => "Adding a new check"));
    $app->render('home.php');
});

$app->put('/service/checks/:id', function ($id) use($app) {
    $app->view()->setData(array('message' => "Updating check ".$id));
    $app->render('home.php');
});

$app->delete('/service/checks/:id', function ($id) use($app) {
    $app->view()->setData(array('message' => "Deleting check ".$id));
    $app->render('home.php');
});

// Default route
// TODO: Setup a template
$app->get('/', function () use($app) {

$uris = <<<EOT
<p>Available URIs</p>
<ul>
    <li><a href="service/checks">Get all checks (GET)</a></li>
    <li><a href="service/checks/5">Get check (GET)</a></li>
    <li><a href="service/checks/5">Update check (PUT)</a></li>
    <li><a href="service/checks/5">Delete check (Delete)</a></li>
    <li><a href="service/checks/5/status">Get status of check (GET)</a></li>
    <li><a href="service/checks/5/execute">Execute Check (GET)</a></li>
    <li><a href="service/checks/add">Add check</a></li>
</ul>
EOT;

$app->view()->setData(array('message' => $uris));
    $app->render('home.php');

});

$app->get('/demo', function () use($app) {

    global $DBConfig;
    
    
    try {
        $dbh = new PDO('mysql:host='.$DBConfig['host'].';dbname='.$DBConfig['db_name'], $DBConfig['username'], $DBConfig['password']);
        //$stmt = $dbh->query('SHOW VARIABLES LIKE "%version%"');
        $stmt = $dbh->query('SHOW VARIABLES LIKE "%version%"');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $res = $stmt->fetchAll();
        die(var_dump($res));
        if(count($res) > 0)
        {
            $app->view()->setData(array('table_status' => "rs-table-status-ok", 'icon_status' => "rs-status-ok", 'message' => $res[0]));
        }
        else
        {
            $app->view()->setData(array('table_status' => "rs-table-status-error", 'icon_status' => "rs-status-error", 'message' => 'Unable to connect'));
        }
    }
    catch (PDOException $e) {
        $app->view()->setData(array('table_status' => "rs-table-status-error", 'icon_status' => "rs-status-error", 'message' => $e->getMessage()));
    }

/*    
        if(empty($res))
        {
            $app->view()->setData(array('status' => "rs-table-status-error", 'message' => $res['version']));
        }
        else
        {
            $app->view()->setData(array('status' => "rs-table-status-ok", 'message' => 'Unable to connect'));
        }
        */
    
    $app->render('demo.php');
});



$app->run();