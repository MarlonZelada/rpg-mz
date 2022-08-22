<?php

session_start();

function terminar_sesion()
{
    //require "Clases.php";
    session_destroy();

    //if (isset($_COOKIE['sesion_automatica'])) {
    //    setcookie('sesion_automatica', "");
    //}
    /*if (isset($_SERVER['HTTP_COOKIE'])) {
        $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
        foreach ($cookies as $cookie) {
            $parts = explode('=', $cookie);
            $name = trim($parts[0]);
            setcookie($name, '', time() - 1000);
            setcookie($name, '', time() - 1000, '/');
        }
    }*/
}

function validar_estado()
{
    //require_once 'controllers/LoginController.php';
    //$estado = new LoginController();
    //$estado_actual = $estado->validar_estado();
    //return $estado_actual;
}
