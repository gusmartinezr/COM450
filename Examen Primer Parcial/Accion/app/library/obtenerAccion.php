<?php

namespace App\Library;

class obtenerAccion{

    public static function obtenerAccion($esObligatorio,$esDocente){
        
        if($esObligatorio==true && $esDocente==true){
            return 'actualizar';
        }
 }
}