<?php

    session_start();

    require_once (__DIR__."/../mdb/mdbUsuario.php");
        
        $email= $_POST['email'];
        $password = $_POST['password'];
        $idenficador = 2;
        //autentica que el usuario exista
        $user = autenticarUsuario($email, $password);
        
        if($user != null){            
            $_SESSION['ID_USUARIO']     = $user->getIdUsuario();
            $_SESSION['NOMBRE_USUARIO'] = $user->getNombre();
            
            if($user->getIdTipoDeUsuario() == $idenficador ){//es admin¿?
                header("Location: ../../vista/administradorUsuarios.php");                
            }else{
                header("Location: ../../vista/index.php");
            }
            
        }else{
            //Si el usuario no existe se vuelve a mostrar el login
            header("Location: ../../vista/login.php");
        }
