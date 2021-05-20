<?php

namespace app\controllers;

use app\models\Crud;

class Site extends Crud{

    public function home(){
        require_once __DIR__ . '/../views/home.php';
    }

    public function galeria($foto){

        $photo = $foto;

        require_once __DIR__ . '/../views/galeria.php';
    }

     public function cadastro(){

        require_once __DIR__ . '/../views/cadastro.php';                
    }

    public function cadastrar(){
        $cadastrar = $this->create();
        header("Location:/Curso-PHP-MVC/Site/consulta");                     
    }



    public function consulta(){

        $consulta = $this->read();
        
        require_once __DIR__ . '/../views/consulta.php';        
    }

    public function editar(){

        $editar = $this->editForm();
        
        require_once __DIR__ . '/../views/editar.php';        
    }

    public function alterar(){

        $alterar = $this->update();
        header("Location:/Curso-PHP-MVC/Site/consulta");    
    }

    public function deletar(){

        $deletar = $this->delete();
        header("Location:/Curso-PHP-MVC/Site/consulta");        
    }
    
}