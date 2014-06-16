<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/service/checks', function () {
    echo "This is all of our checks";
});

$app->get('/service/checks/:id', function ($id) {
    echo "This is check ".$id;
});

$app->get('/service/checks/:id/status', function ($id) {
    echo "This is the status of check ".$id;
});

$app->get('/service/checks/:id/execute', function ($id) {
    echo "Executing check ".$id;
});

$app->post('/service/checks/add', function () {
    echo "Adding a new check";
});

$app->put('/service/checks/:id', function ($id) {
    echo "Updating check ".$id;
});

$app->delete('/service/checks/:id', function ($id) {
    echo "Deleting check ".$id;
});

// Default route
// TODO: Setup a template
$app->get('/', function () {
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>PHP Sample App</title>
</head>
<body>
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
</body>
</html>
<?php
});


$app->run();