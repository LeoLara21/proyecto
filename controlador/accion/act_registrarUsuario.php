<?php
   
    session_start();
    
    require_once (__DIR__."/../mdb/mdbUsuario.php");
    require_once (__DIR__."/../../modelo/entidad/Usuario.php");

        $nombre          = $_POST['nombre'];
        $id_tipo_usuario = $_POST['id_tipo_usuario'];
        $apellido        = $_POST['apellido'];
        $email           = $_POST['email'];
        $password        = $_POST['password'];
        $fechaNacimiento = $_POST['fechaNacimiento'];       
        $telefono        = $_POST['telefono'];
        $identificacion  = $_POST['identificacion'];        
 
        if(($_POST['id_tipo_usuario'])==2) {
            $usuario = new Usuario(NULL, $nombre, $id_tipo_usuario,$apellido, $email, 
            $password, $fechaNacimiento, $telefono,$identificacion);
            registrarUsuario($usuario);
            header("Location: ../../vista/registerAdmin.php");
        }else{
            $usuario = new Usuario(NULL, $nombre, $id_tipo_usuario,$apellido, $email, 
            $password, $fechaNacimiento, $telefono,$identificacion);
            $registro = registrarUsuario($usuario);
            if($registro)
                header("Location: ../../vista/login.php?msg=Se realizo el registro satisfactoriamente");
            else
                header("Location: ../../vista/login.php?msg=No se pudo realizar el registro");
        }