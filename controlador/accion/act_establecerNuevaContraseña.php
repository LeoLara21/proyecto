<?php

session_start();

require_once (__DIR__."/../mdb/mdbusuario.php");
require_once (__DIR__."/../../modelo/entidad/usuario.php");

$newPassword = $_POST['new_password'];
$id_usuario  = $_POST['id']; 
$usuario     = verUsuarioPorId($id_usuario);


if($usuario!=null){

    $userMod = new Usuario($usuario->getIdUsuario(),$usuario->getNombre(), $usuario->getIdTipoDeUsuario(),$usuario->getApellido(), $usuario->getEmail(),
    $newPassword, $usuario->getFechaNacimiento(),$usuario->getTelefono(), $usuario->getIdentificacion());
    
    editarUsuario($userMod);

    echo 'El cambio se ha realizado correctamente';
    header("Location: ../../vista/login.php");
}else{
    session_destroy();
    echo 'El cambio no se ha realizado correctamente';
    header("Location: ../../vista/recuperacion.php");
}