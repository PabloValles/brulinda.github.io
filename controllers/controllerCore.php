<?php

/**
* Controlador principal - 
* Vamos a tratar de manejar casi todo el sistemas desde este controlador...
*
* 1) Funciones para el manejo o navegación por el sistema.
	 # Links, enlaces, navegación, hrefs, etc.
* 2) 
*
* 
*/
class controllerCore {

# ========================================================= # 
# 1) FUNCIONES NAVEGACIÓN DEL SISTEMA EN GENERAL.           #
# ========================================================= #
	
	# Funcion para la navegación del sistema 
	public function mostrarPagina(){	
		include "views/plantilla.php";
	}

	# Funcion para los enlaces
	public function coreNavegacion(){
		if(isset( $_GET['action'])){
			$enlaces = $_GET['action'];
		}else{
			$enlaces = "index";
		}

		$respuesta = enlaces::navegacion($enlaces);

		/*
		$respuesta = (isset( $_GET['action'])) ?  $_GET['action'] : "index";
		*/

		include $respuesta; /* Incluimos lo que nos retorna...*/
	}




























}
#-===================================================-#
# Fin del Controlador                                 #
#-===================================================-#