<?php

//clase controlador pricipal
//se encarga de poder cargar los metodos y las vistas..

class Controlador{
    //cargar modelo..
    public function modelo($modelo){

        //cargar modelo..
        require_once '../app/modelos/'.$modelo.'.php';
        //instanciar el metodo...
        return new $modelo();
    }

    //cargar vista
    public function vista($vista, $datos = []){
        //chequear si el archivo existe 
        if(file_exists('../app/vistas/'.$vista.'.php')){
            require_once '../app/vistas/'.$vista.'.php';
        }else{
           //si el archivo de la vista no existe...
            die('La Vista No Existe..'); 
        }
    }

}