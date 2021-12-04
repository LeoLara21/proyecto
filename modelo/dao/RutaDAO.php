<?php

require_once ("DataSource.php");
require_once (__DIR__."/../entidad/Ruta.php");    

class RutaDAO{

    public function crearRuta(Ruta $ruta){  

        $data_source = new DataSource();

        $stmt1 = "INSERT INTO rutas VALUES (NULL,:nombre, :id_Guia, 
        :id_ciudad, :fecha_inicio, :fecha_fin)";

        $ultimaRuta = $data_source->ejecutarActualizacion($stmt1, array(
            ':nombre'       => $ruta->getNombre();
            ':id_Guia'      => $ruta->getIdGuia();
            ':id_ciudad'    => $ruta->getIdCiudad();
            ':fecha_inicio' =>$ruta->getFechaInicio();
            ':fecha_fin'    =>$ruta->getFechaFin();                
            )
        );        
        return $ultimaRuta;
    }

    public function verRutasGuardadas($id_usuario){        
    
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT id_ruta, 
        nombre, id_Guia, id_ciudad, fecha_inicio, fecha_fin FROM rutas WHERE id_usuario = id_usuario",
        array(':id_usuario'=>$id_usuario));
        $ruta = null;
        $rutas = array();

        foreach($data_table as $indice => $valor){
            $ruta = new Ruta(
                $data_table[$indice]["id_ruta"],
                $data_table[$indice]["nombre"],
                $data_table[$indice]["id_Guia"],
                $data_table[$indice]["id_ciudad"],
                $data_table[$indice]["fecha_inicio"],
                $data_table[$indice]["fecha_fin"]
            );
            array_push($rutas,$ruta);
        }

        return $rutas;
    }





}    

?>