<?php
require_once 'app/controllers/HomeController.php';

$request = $_SERVER['REQUEST_URI'];
$path = parse_url($request, PHP_URL_PATH);

$controller = new HomeController();

switch ($path) {
    case '/':
    case '/home':
        $controller->home();
        break;
    case '/inicio':
        $controller->inicio();
        break;
    case '/lenguaje':
        $controller->lenguaje();
        break;
    case '/contactar':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->contactarPost();
        } else {
            $controller->contactar();
        }
        break;
    default:
        $controller->home();
        break;
}
?>