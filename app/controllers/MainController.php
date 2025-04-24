<?php

namespace app\controllers;
use app\core\Controller;


//this is an example controller class, feel free to delete
class MainController extends Controller {

    public function homepage() {
        //remember to route relative to index.php
        //require page and exit to return an HTML page
        $this->returnView('./assets/views/main/homepage.html');
    }

    public function notFound() {
    }

    public function albumsView() {
        $this->returnView('assets/views/main/albums.php');
    }
    
}

 