<?php
// Basic Router
$uri = trim($_SERVER['REQUEST_URI'], '/');
$method = $_SERVER['REQUEST_METHOD'];

require_once '../app/core/Controller.php';
require_once '../app/core/Model.php';
require_once '../app/core/Database.php';
require_once '../app/controllers/UserController.php';
require_once '../app/models/User.php';
require_once '../app/core/Autoload.php';

use App\Controllers\UserController;

$controller = new UserController();

if ($uri === '' && $method === 'GET') {
    $controller->index();
} elseif ($uri === 'create' && $method === 'GET') {
    $controller->create();
} elseif ($uri === 'store' && $method === 'POST') {
    $controller->store();
} elseif (preg_match('/edit\/(\d+)/', $uri, $matches) && $method === 'GET') {
    $controller->edit($matches[1]);
} elseif (preg_match('/update\/(\d+)/', $uri, $matches) && $method === 'POST') {
    $controller->update($matches[1]);
} elseif (preg_match('/delete\/(\d+)/', $uri, $matches) && $method === 'POST') {
    $controller->delete($matches[1]);
} else {
    http_response_code(404);
    echo "Page not found.";
}
