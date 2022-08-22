<?php

class LoginModel
{

    private $datos;
    private $conectar;

    public function __construct()
    {
        $this->conectar = new Database();
        $this->conectar = $this->conectar->conexion();

        $this->datos = array();
    }

    public function buscar_usuario($usuario, $password)
    {

        $sql = "SELECT * FROM usuario WHERE usuario = :usuario AND password = :password";

        $result = $this->conectar->prepare($sql);
        $result->bindParam(':usuario', $usuario);
        $result->bindParam(':password', $password);
        $result->execute();

        $data = $result->fetch();
        return $data;
    }

    public function estado_usuario($id_usuario)
    {
        $sql = "SELECT * FROM usuario WHERE id_usuario = :id_usuario AND estado_usuario = 'S'";

        $result = $this->conectar->prepare($sql);
        $result->bindParam(':id_usuario', $id_usuario);
        $result->execute();

        $data = $result->fetch();
        return $data;
    }
}
