<?php


require_once 'config/config.php';
require_once 'database/Database.php';
//require_once 'helpers/sesion.php';
require_once 'helper/sesion.php';
require_once 'helper/helps.php';


$conectar = new Database();
$conectar = $conectar->conexion();
//echo $conectar;

$url = (!empty($_GET['url'])) ? $_GET['url'] : 'home';
//echo '<p>url barra ' . $url . '</p>';

$url = explode('/', $url);

$controlador = ucfirst(strtolower($url[0])) . 'Controller';
//echo '<p>Controlador ' . $controlador . '</p>';

if (!empty($url[1])) {
    $metodo = $url[1];
} else {
    $metodo = 'index';
}
//echo '<p>Metodo ' . $metodo . '</p>';

$parametros = '';
if (!empty($url[2])) {
    for ($i = 2; $i < count($url); $i++) {
        $parametros .= $url[$i] . '/';
    }
    $parametros = trim($parametros, '/');
}
//echo '<p>Parametros ' . $parametros . '</p>';


if (file_exists('controllers/' . $controlador . '.php')) {
    require_once 'controllers/' . $controlador . '.php';

    $controller = new $controlador();

    if (method_exists($controller, $metodo)) {
        $method = $controller->$metodo($parametros);
    } else {
        require_once 'views/error-404/error-404.php';
        //echo '<p>El metodo no existe</p>';
        //echo '<p>Metodo ' . $metodo . '</p>';
    }
} else {
    require_once 'views/error-404/error-404.php';
    //echo '<p>El controlador no existe</p>';
    //echo '<p>Controlador ' . $controlador . '</p>';
}
