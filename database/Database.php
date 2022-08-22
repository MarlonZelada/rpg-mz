<?php

class Database
{
    private $host;
    private $dbname;
    private $user;
    private $password;
    private $charset;

    private $PDOstring;
    private $conexion;

    public function __construct()
    {
        $this->host = HOST;
        $this->dbname = DBNAME;
        $this->user = USER;
        $this->password = PASSWORD;
        $this->charset = CHARSET;

        $this->PDOstring = "mysql:host=" . $this->host . ";dbname=" . $this->dbname . ";charset=" . $this->charset;
    }

    public function conexion()
    {
        try {
            $this->conexion = new PDO($this->PDOstring, $this->user, $this->password);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "<p>Conectado</p>";
        } catch (PDOException $e) {
            echo "<p>Error: </p>" . $e->getMessage();
        }
        return $this->conexion;
    }
}
