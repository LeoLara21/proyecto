<?php

class Administrador extends Usuario{

    public $id_admin;    
    public $cargo;
    public $area;

    public function __construct($id_usuario, $nombre, $id_tipo_usuario, $apellido, $email, $fechaNacimiento, $telefono, $identificacion,$id_admin, $cargo, $area){
        parent::__construct($id_usuario, $nombre, $id_tipo_usuario, $apellido, $email, $password, $fechaNacimiento, $telefono, $identificacion);
        $this-> id_admin = $id_admin;
        $this-> cargo    = $cargo;
        $this-> area     = $area;
    }

    //metodos GET
    
    public function getIdAdmin(){
        return $this->id_admin;
    }

    public function getCargo()
    {
        return $this->cargo;
    }

    public function getArea(){
        return $this->area;
    }

    //metodos SET

    public function setIdAdmin($id_admin){
        $this->id_admin = $id_admin;
        return $this;
    }

    public function setCargo($cargo)
    {
       $this->cargo = $cargo;
       return $this;
    }

    public function setArea($area){
        $this->area = $area;
        return $this;
    }

}

?>