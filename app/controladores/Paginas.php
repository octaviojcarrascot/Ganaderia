<?php

class Paginas extends Controlador{

    public function __construct(){
        $this->usuarioModelo = $this->modelo('Usuario');
       
    }
    public function index(){

       //obtener los usuarios
       $usuarios = $this->usuarioModelo->obtenerUsuarios();

        $datos = [
            'usuarios' => $usuarios
          
        ];
        
      $this->vista('paginas/inicio', $datos);
    }
   
}