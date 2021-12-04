<?php

class Ruta{

    public $id_ruta;
    public $nombre;
    public $id_Guia;
    public $id_ciudad;
    public $fecha_inicio;
    public $fecha_fin;

    public function __construct($id_ruta, $nombre, $id_Guia, $id_ciudad, $fecha_inicio, $fecha_fin ){
        $this->id_ruta      = $id_ruta;
        $this->nombre       = $nombre;
        $this->id_Guia      = $id_ruta;
        $this->id_ciudad    = $id_ciudad;
        $this->fecha_inicio = $fecha_inicio;
        $this->fecha_fin    = $fecha_fin;
    }

    //metodos GET

    public function getIdRuta(){
        return $this->id_ruta;        
    }

    public function getNombre(){
        return $this->nombre;        
    }

    public function getIdGuia(){
        return $this->id_Guia;        
    }

    public function getIdCiudad(){
        return $this->id_ciudad;        
    }

    public function getFechaInicio(){
        return $this->fecha_inicio;        
    }

    public function getFechaFin(){
        return $this->fecha_fin;        
    }

    //metodos SET

    public function setIdRuta($id_ruta){
        $this->id_ruta = $id_ruta;        
        return $this;        
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;        
        return $this;
    }

    public function setIdGuia($id_Guia){
        $this->id_Guia = $id_Guia;        
        return $this;
    }

    public function setIdCiudad($id_ciudad){
        $this->id_ciudad = $id_ciudad;        
        return $this;

    }

    public function setFechaInicio($fecha_inicio){
       $this->fecha_inicio = $fecha_inicio;        
       return $this;
    }

    public function setFechaFin($fecha_fin){
        $this->fecha_fin = $fecha_fin;        
        return $this;
    }






}

?>