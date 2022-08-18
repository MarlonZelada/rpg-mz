<?php


require_once 'config/config.php';
//require_once 'db/Database.php';
//require_once 'helpers/sesion.php';


//$conectar = new Database();
//$conectar->conexion();


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
        echo '<p>El metodo no existe</p>';
        echo '<p>Metodo ' . $metodo . '</p>';
    }
} else {
    echo '<p>El controlador no existe</p>';
    echo '<p>Controlador ' . $controlador . '</p>';
}
