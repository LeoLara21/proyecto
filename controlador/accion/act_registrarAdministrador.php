<?php
   
    session_start();
    
    require_once (__DIR__."/../mdb/mdbUsuario.php");
    require_once (__DIR__."/../../modelo/entidad/Usuario.php");

        $cargo  = $_POST['cargo'];
        $area   = $_POST['area'];
        $clave  = $_POST['clave'];
  
 
        if(($_POST['clave'])==0677) {
            $administrador = new Administrador(NULL, $cargo, $area);
            registrarUsuario($administrador);
            header("Location: ../../vista/administradorUsuarios.php");
        }else{
            header("Location: ../../vista/login.php?msg=No se pudo realizar el registro");                
        }