<?php
include_once 'views/includes/config/head.php';
?>
<body class="">
<?php

date_default_timezone_set('America/Argentina/Buenos_Aires');

$cargarPagina = new controllerCore();
$cargarPagina-> coreNavegacion();