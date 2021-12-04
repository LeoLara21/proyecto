<?php
    
    session_start();
    require_once (__DIR__."/../mdb/mdbUsuario.php");
    require_once (__DIR__."/../../modelo/entidad/Usuario.php");
    require_once (__DIR__.'/../../lib/PHPMailer/PHPMailerAutoload.php');
    date_default_timezone_set('Etc/UTC');

    $email= $_POST['email_verificacion'];
    $usuario = buscarUsuarioPorEmail($email);
    
    if($usuario!=null){        
        
        //datos del usuario
        $codigo1 = crypt($usuario->getEmail(),'$1$');
        $codigo2 = crypt(date('Y-m-d'),'$1$');
        $idU     = $usuario->getIdUsuario();
        
        //preparacion del email
        $enlace          = "http://localhost/proyecto/vista/solicitarNuevacontraseña.php?idU=".$idU."&id1=".$codigo1."&id2=".$codigo2;   
        $bodyEmail       = "Hola ".$usuario->getNombre()."!, presione aquí para cambiar su contraseña: \n".$enlace."";        
        $mail            = new PHPMailer();
        $mail->isSMTP();
        $mail->Mailer = 'smtp';
        $mail->SMTPDebug = 0;
        // $mail->Host      = 'smtp.gmail.com';
        $mail->Host = "smtp.hostinger.com";
        $mail->Port = 587;
        $mail->SMTPAuth  = true;
        $mail->Username  = "programacionweb@ingenioytecnologia.net";
        $mail->Password  = "qupjyk-6gegjo-xoStoq";
        // $mail->Username  = "lobonoctugno7@gmail.com";
        // $mail->Password  = "leonardlara.m2";
        $mail->WordWrap  = 50;
        $mail->setFrom('programacionweb@ingenioytecnologia.net','Admin Sol Caribe Tours');
        $mail->addAddress($email, 'Usuario');
        // $mail->addAddress('leolamart86@gmail.com', 'Usuario');        
        $mail->Subject   = 'Usted ha solicitado un cambio de contraseña';
        $mail->Body=$bodyEmail;
        $mail->AltBody   = 'This is a plain-text message body';
        
        //verificación de envio
        if(!$mail->send()) {
            echo 'Mailer Error: '. $mail->ErrorInfo;    
        }else {                        
            echo 'Message sent!';
            header("Location: ../../vista/login.php");               
        }
    }
?>