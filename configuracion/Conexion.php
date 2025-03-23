<?php
class Conexion
{

    protected $conexion;
    private  $host = "127.0.0.1";
    private $puerto = "3306";
    private $user = "root";
    private $password = "";


    private  $datebase = "biblioteca";

    public function __construct()
    {
        $this->conexion = new mysqli($this->host, $this->user, $this->password, $this->datebase, $this->puerto);
        if ($this->conexion->connect_error) {
            die("error" . $this-> conexion->connect_error);
        }
    }
}
