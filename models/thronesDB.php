<?php

class thronesDB {
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $db_name="gameofthrones";

    private $conexion;

    private $error=false;

    function __construct()
    {
        $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
        if($this->conexion->connect_errno){
            $this->error=true;
        }
    }

    function hayError(){
        return $this->error;
    }

    public function titles(){

        if($this->error==false){
            $resultado= $this->conexion->query("SELECT * FROM TITLES");
            return $resultado;
        }else{
            return null;
        }

    }

    public function cast(){

        if($this->error==false){
            $resultado= $this->conexion->query("SELECT * FROM CAST");
            return $resultado;
        }else{
            return null;
        }
    }

    public function seasonEP(){

        if($this->error==false){
            $resultado= $this->conexion->query("SELECT * FROM SEASON_EP");
            return $resultado;
        }else{
            return null;
        }
    }
}

?>