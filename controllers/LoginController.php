<?php

class LoginController
{

    public function __construct()
    {
        require_once 'models/LoginModel.php';
    }

    public function index()
    {
        $data['page_title'] = 'Login';
        require_once 'views/login/index.php';
    }

    public function iniciar_sesion()
    {
        $guardar_sesion = $_POST['guardar_sesion'];

        if (!empty($_POST['usuario'])) {
            $usuario = $_POST['usuario'];
        } else {
            $response['respuesta'] = 'Ingresar usuario';
            $response['codigo'] = '0';
            $response = json_encode($response);
            echo $response;

            return;
        }
        if (!empty($_POST['password'])) {
            $password = $_POST['password'];
        } else {
            $response['respuesta'] = 'Ingresar password';
            $response['codigo'] = '0';
            $response = json_encode($response);
            echo $response;
            return;
        }

        $datos_login = new LoginModel();
        $datos_login = $datos_login->buscar_usuario($usuario, $password);

        if (!$datos_login) {
            $response['respuesta'] = 'Usuario o Password incorrectos';
            $response['codigo'] = '0';
            $response = json_encode($response);
            echo $response;
            return;
        } else {
            if ($datos_login['estado_usuario'] == 'n') {
                $response['respuesta'] = 'Cuenta desactivada';
                $response['codigo'] = '0';
                $response = json_encode($response);
                echo $response;
                return;
            } else {
                $_SESSION['id_usuario'] = $datos_login['id_usuario'];
                $_SESSION['usuario'] = $datos_login['usuario'];
                $_SESSION['nombre_usuario'] = $datos_login['nombre_usuario'];
                $_SESSION['apellido_usuario'] = $datos_login['apellido_usuario'];
                $_SESSION['id_rol_usuario'] = $datos_login['id_rol_usuario'];

                $response['respuesta'] = 'Cuenta activa';
                $response['codigo'] = '1';
                $response = json_encode($response);
                echo $response;
                return;
            }
        }
    }

    public function cerrar_sesion()
    {
        session_destroy();
        header('Location:' . URL . 'login');
    }
}
