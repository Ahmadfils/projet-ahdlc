<?php
ob_clean();
session_start();
require_once '../core/Database.php';
require_once '../core/Router.php';
require_once '../core/Controller.php';

// Autoload classes
spl_autoload_register(function ($class_name) {
    if (file_exists('controllers/' . $class_name . '.php')) {
        require_once 'controllers/' . $class_name . '.php';
    } elseif (file_exists('../core/' . $class_name . '.php')) {
        require_once '../core/' . $class_name . '.php';
    }
});

// Define the default controller and method
$controllerName = 'AdminHomeController';
$methodName = 'index';
$url = [];

// Parse the URL
if (isset($_GET['url'])) {
    $url = rtrim($_GET['url'], '/');
    $url = explode('/', $url);

    // Check if the controller exists
    if (file_exists('controllers/' . ucfirst($url[0]) . 'Controller.php')) {
        $controllerName = ucfirst($url[0]) . 'Controller';
        array_shift($url);
    }

    // Check if the method exists
    if (isset($url[0]) && method_exists($controllerName, $url[0])) {
        $methodName = $url[0];
        array_shift($url);
    }
}

// Instantiate the controller and call the method
$controller = new $controllerName();
call_user_func_array([$controller, $methodName], $url);
