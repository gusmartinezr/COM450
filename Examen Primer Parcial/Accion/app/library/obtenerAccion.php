<?php

namespace App\Library;

class obtenerAccion{

    public static function obtenerAccion($esObligatorio=false,$esDocente=false,$esExtremo=false,$estadoRegistro=""){
        
        if($esObligatorio==true && $esDocente==true){
            return 'actualizar';
        }
        if($esObligatorio==false && $esDocente==true){
            return 'matricular';
        }
        if($esExtremo==true && $estadoRegistro=="porConfirmar"){
            return "actualizar";
        }
 }
}