<?php

namespace App\Library;

class obtenerAccion{

    public static function obtenerAccion($esObligatorio=false,$esDocente=false,$esExterno=false,$estadoRegistro="",$tipoPersonaDestino=""){
        
        if($esObligatorio==true && $esDocente==true){
            return 'actualizar';
        }
        if($esObligatorio==false && $esDocente==true){
            return 'matricular';
        }
        if($esExterno==true && $estadoRegistro=="porConfirmar"){
            return "actualizar";
        }
        if($esExterno==true &&$tipoPersonaDestino=="externo" ){
            return "registrar";
        }
        if($esExterno =true && $estadoRegistro=="vigente"){
            return "matricular";
        }
 }
}