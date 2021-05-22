<?php

namespace app\controllers;

use app\models\Crud;

class Site extends Crud{

    public function home(){
        require_once __DIR__ . '/../views/home.php';
    }    
}