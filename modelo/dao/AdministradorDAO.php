<?php

require_once ("DataSource.php"); 
require_once (__DIR__."/../entidad/Administrador.php");

class AdministradorDAO extends UsuarioDAO{



    public function registrarAdministrador(Administrador $administrador){

        $data_source = new DataSource();     

        $stmt1 = "INSERT INTO administradores VALUES (NULL,:cargo,:area,:id_usuario)"; 
        
        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':cargo'      => $administrador->getCargo(),
            ':area'       => $administrador->getArea(),
            ':id_usuario' => $administrador->getIdUsuario()
            )
        ); 

      return $resultado;
    
    }
    
}

?>