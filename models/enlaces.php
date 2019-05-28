<?php

class Enlaces{
    
    public function navegacion($enlace){
        
        if($enlace=="inicio" || $enlace=="ayuda" ){
            $module = "views/includes/".$enlace.".php";
        }
        elseif($enlace == "index"){
            $module = "views/includes/inicio.php";
        }
        elseif($enlace=="productos"){
            $module = "views/includes/productos/".$enlace.".php";
        }
        
        else{
            $module = "views/includes/404.php";
        }

        return $module;    
    }
}