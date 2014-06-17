<?php
require 'vendor/autoload.php';

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
    $app->view()->setData(array('message' => "THIS IS MY DEMO"));
    $app->render('demo.php');
});



$app->run();