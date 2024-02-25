<?php

/*
traer la Url para ingresar al navegador,
1- controlador,
2- Metodos,
3- parametro
Ejemplo: /articulos/actualizar/4
*/

class Core{
    protected $controladorActual = 'paginas';
    protected $metodoActual = 'index';
    protected $parametros = [];


//Este es el Constructor
    public function __construct(){
        //print_r($this->getUrl());
        $url = $this->getUrl();
       
        //Buscar en los Controladores si el Conyrolador Existe....
        if(file_exists('../app/controladores/' .ucwords($url[0]). '.php')){
            //Si Existe se Setea como Controlador Por Defecto...
            $this->controladorActual = ucwords($url[0]);
            //unset indice
            unset($url[0]);
        }

        //requerir el controlador..
        require_once '../app/controladores/' .$this->controladorActual . '.php';
        $this->controladorActual = new $this->controladorActual;

        //Chequear la segunda parte de la Url que seria el metodo...
        if(isset($url[1])){
            if(method_exists($this->controladorActual, $url[1])){
                //chequiamos el metodo
                $this->metodoActual = $url[1];
                //unset indice
                unset($url[1]);
            }
        }
        //para probar el metodo
        // echo $this->metodoActual;

        //obtener los parametros...
        $this->parametros = $url ? array_values($url) : [];

        //llamar callback con parametros array
        call_user_func_array([$this->controladorActual, $this->metodoActual], $this->parametros);
        
    }

    public function getUrl(){
       // echo $_GET['url'];

       if (isset($_GET['url']) ){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
       }

    }

}