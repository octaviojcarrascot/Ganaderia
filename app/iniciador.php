<?php
//Cargar todas las Librerias....
require_once 'config/Configurar.php';
require_once 'helpers/url_helpers.php';


//require_once 'librerias/Base.php';
//require_once 'librerias/Controlador.php';
//require_once 'librerias/Core.php';

//el Autoload php
spl_autoload_register(function($nombreClase){

    require_once 'librerias/'.$nombreClase. '.php';
});




