<?php

require_once ("DataSource.php"); 
require_once (__DIR__."/../entidad/Usuario.php");

class UsuarioDAO{

    public function autenticarUsuario($email, $password){

        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM usuarios WHERE email =:email AND password =:password",array(':email'=>$email, ':password'=>$password));
        $usuario = null;
        if(count($data_table)==1){
            foreach($data_table as $indice => $valor){
                $usuario = new Usuario(
                    $data_table[$indice]["id_usuario"],
                    $data_table[$indice]["nombre"],
                    $data_table[$indice]["id_tipo_usuario"],
                    $data_table[$indice]["apellido"],
                    $data_table[$indice]["email"],
                    $data_table[$indice]["password"],
                    $data_table[$indice]["fechaNacimiento"],
                    $data_table[$indice]["telefono"],
                    $data_table[$indice]["identificacion"]
                );
            }           
            return $usuario;     
        }
    }

    
    public function registrarUsuario(Usuario $usuario){
        $data_source = new DataSource();
        
        $stmt1 = "INSERT INTO usuarios VALUES (NULL,:nombre,:id_tipo_usuario,:apellido,:email,:password,:fechaNacimiento,:telefono,:identificacion)"; 
        
        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':nombre'           => $usuario->getNombre(),
            ':id_tipo_usuario'  => $usuario->getIdTipoDeUsuario(),
            ':apellido'         => $usuario->getApellido(),
            ':email'            => $usuario->getEmail(),
            ':password'         => $usuario->getPassword(),
            ':fechaNacimiento'  => $usuario->getFechaNacimiento(),
            ':telefono'         => $usuario->getTelefono(),
            ':identificacion'   => $usuario->getIdentificacion()
            )
        ); 

      return $resultado;
    }
    

    public function verUsuarios(){
        $data_source = new DataSource();
        
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM usuarios", NULL);

        $usuario=null;
        $usuarios=array();

        foreach($data_table as $indice => $valor){
            $usuario = new Usuario(
                $data_table[$indice]["id_usuario"],
                $data_table[$indice]["nombre"],
                $data_table[$indice]["id_tipo_usuario"],
                $data_table[$indice]["apellido"],
                $data_table[$indice]["email"],
                $data_table[$indice]["password"],
                $data_table[$indice]["fechaNacimiento"],
                $data_table[$indice]["telefono"],
                $data_table[$indice]["identificacion"]
            );
            array_push($usuarios,$usuario);
        }
        
    return $usuarios;
    }

    public function eliminarUsuario($id_usuario){
        
        $data_source = new DataSource();        
        $stmt1 = "DELETE FROM usuarios WHERE id_usuario = :id_suario"; 
        
        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':id_usuario' => $id_usuario
            )
        ); 

      return $resultado;
    }

    public function verUsuarioPorId($id_usuario){
        
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM usuarios WHERE id_usuario = :idUsuario", array(':idUsuario'=>$id_usuario));
        $usuario=null;
                
        if(count($data_table)==1){
            $usuario = new Usuario(
                $data_table[0]["id_usuario"],
                $data_table[0]["nombre"],
                $data_table[0]["id_tipo_usuario"],
                $data_table[0]["apellido"],
                $data_table[0]["email"],
                $data_table[0]["password"],
                $data_table[0]["fechaNacimiento"],
                $data_table[0]["telefono"],
                $data_table[0]["identificacion"]
            );
        }        
        return $usuario;
    }     

    public function buscarUsuarioPorEmail($email){
        
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM usuarios WHERE email = :email", array(':email'=>$email));
        $usuario=null;
                
        if(count($data_table)==1){
            $usuario = new Usuario(
                $data_table[0]["id_usuario"],
                $data_table[0]["nombre"],
                $data_table[0]["id_tipo_usuario"],
                $data_table[0]["apellido"],
                $data_table[0]["email"],
                $data_table[0]["password"],
                $data_table[0]["fechaNacimiento"],
                $data_table[0]["telefono"],
                $data_table[0]["identificacion"]
            );
        }        
        return $usuario;
    }


    public function editarUsuario($usuario){
        
        $data_source = new DataSource();

        $stmt1 = "UPDATE usuarios SET nombre = :nombre, id_tipo_usuario =:id_tipo_usuario, 
        apellido = :apellido, email = :email, password = :password, 
        fechaNacimiento = :fechaNacimiento, telefono = :telefono,
        identificacion = :identificacion WHERE id_usuario = :id_usuario";       

        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':nombre'           => $usuario->getNombre(),
            ':id_tipo_usuario'  => $usuario->getIdTipoDeUsuario(),
            ':apellido'         => $usuario->getApellido(),
            ':email'            => $usuario->getEmail(),
            ':password'         => $usuario->getPassword(),
            ':fechaNacimiento'  => $usuario->getFechaNacimiento(),
            ':telefono'         => $usuario->getTelefono(),
            ':identificacion'   => $usuario->getIdentificacion(),
            ':id_usuario'       => $usuario->getIdUsuario()            
            )
        ); 

      return $resultado;
    }

}


?>