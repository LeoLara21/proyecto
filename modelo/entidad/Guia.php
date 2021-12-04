<?php

class Guia extends Usuario{

    public $id_guia;    
    public $edad;
    public $especialidad;
    public $idioma;

    public function __construct($id_usuario, $nombre, $id_tipo_usuario, $apellido, $email, $fechaNacimiento, $telefono, $identificacion,$id_guia, $edad, $especialidad, $idioma){
        parent::__construct($id_usuario, $nombre, $id_tipo_usuario, $apellido, $email, $password, $fechaNacimiento, $telefono, $identificacion);
        $this-> id_guia      = $id_guia;
        $this-> edad         = $edad;
        $this-> especialidad = $especialidad;
        $this-> idioma       = $idioma;
    }

    //metodos GET

    public function getIdGuia(){
        return $this->id_guia;
    }

    public function getEdad(){
        return $this->edad;
    }
    
    public function getEspecialidad(){
        return $this->especialidad;
    }

    public function getIdioma(){
        return $this->idioma;
    }

    //metodos SET

    public function setIdGuia($id_guia){
        $this->id_guia = $id_guia;
        return $this;
    }

    public function setEdad($edad){
        $this->edad = $edad;
        return $this;
    }
    
    public function setEspecialidad($especialidad){
        $this->especialidad = $especialidad;
        return $this;
    }

    public function setIdioma($idioma){
        $this->idioma = $idioma;
        return $this;
    }

?>    