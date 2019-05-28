<?php
/**
* [Requerir todos los controladores y modelos correspondientes];
**/
	
	require_once "models/enlaces.php";
	require_once "controllers/controllerCore.php";

/**
* [$cargarPagina Controlador principal]
* @var ControllerPrincipal (clase) - función: mostrarPagina();
*/
	$sistema = new controllerCore();
	$sistema -> mostrarPagina();
