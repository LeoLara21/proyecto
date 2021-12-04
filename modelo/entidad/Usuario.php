<?php

class Usuario
{
    public $id_usuario;
    public $nombre;
    public $id_tipo_usuario;
    public $apellido;
    public $email;
    public $password;
    public $fechaNacimiento;
    public $telefono;
    public $identificacion;

    public function __construct($id_usuario, $nombre, $id_tipo_usuario, $apellido, 
    $email,$password, $fechaNacimiento, $telefono, $identificacion){
        
        $this->id_usuario       = $id_usuario;
        $this->nombre           = $nombre;
        $this->id_tipo_usuario  = $id_tipo_usuario;
        $this->apellido         = $apellido;        
		$this->email            = $email;
        $this->password         = $password;
        $this->fechaNacimiento  = $fechaNacimiento;
        $this->telefono         = $telefono;
        $this->identificacion   = $identificacion;
    }
    //metodos GET

    public function getIdUsuario(){
        return $this->id_usuario;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getIdTipoDeUsuario(){
        return $this->id_tipo_usuario;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function getEmail()
    {
        return $this->email;
    }
    
    public function getPassword(){
        return $this->password;
    }

    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

	 public function getTelefono()
    {
        return $this->telefono;
    }
    public function getIdentificacion()
    {
        return $this->identificacion;

    }

    //metodos SET

    public function setId($id_usuario){
        $this->id_usuario = $id_usuario;
        return $this;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function setIdTipoDeUsuario($id_tipo_usuario){
        $this->id_tipo_usuario = $id_tipo_usuario;
        return $this;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function setPassword($password){
        $this->password = $password;
        return $this;
    }
    
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
        return $this;
    }

	 public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
        return $this;
    }
    public function setIdentifiacion($identificacion)
    {
        $this->identificacion = $identificacion;
        return $this;
    }
    


}


?>