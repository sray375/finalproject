<?php

namespace app\core;

use app\controllers\MainController;
use app\controllers\UserController;
use app\controllers\AlbumController;

class Router {
    public $uriArray;

    function __construct() {
        $this->uriArray = $this->routeSplit();
        $this->handleMainRoutes();
        $this->handleUserRoutes();
        $this->handleAlbumRoutes(); // needs to be called here
    }

    protected function routeSplit() {
        $path = isset($_GET['url']) ? $_GET['url'] : '';
        return explode("/", trim($path, "/"));
    }
        
    protected function handleMainRoutes() {
        if (
            (!isset($this->uriArray[0]) || $this->uriArray[0] === '') &&
            $_SERVER['REQUEST_METHOD'] === 'GET'
        ) {
            $mainController = new MainController();
            $mainController->homepage();
        }

        if (
            isset($this->uriArray[0]) &&
            $this->uriArray[0] === 'discography' &&
            $_SERVER['REQUEST_METHOD'] === 'GET'
        ) {
            $mainController = new MainController();
            $mainController->albumsView();
        }
            
        
    }
    

    protected function handleUserRoutes() {
        if (
            isset($this->uriArray[0]) &&
            $this->uriArray[0] === 'users' &&
            $_SERVER['REQUEST_METHOD'] === 'GET'
        ) {
            $userController = new UserController();
            $userController->usersView();
        }
    
        if (
            isset($this->uriArray[0], $this->uriArray[1]) &&
            $this->uriArray[0] === 'api' &&
            $this->uriArray[1] === 'users' &&
            $_SERVER['REQUEST_METHOD'] === 'GET'
        ) {
            $userController = new UserController();
            $userController->getUsers();
        }
    }
    

    protected function handleAlbumRoutes() {
        if (
            isset($this->uriArray[0], $this->uriArray[1]) &&
            $this->uriArray[0] === 'album' &&
            $this->uriArray[1] === 'born-to-die'
        ) {
            $albumController = new AlbumController();
            $albumController->show('born-to-die');
        }

        if (
            isset($this->uriArray[0], $this->uriArray[1]) &&
            $this->uriArray[0] === 'album' &&
            $this->uriArray[1] === 'ultraviolence'
        ) {
            $albumController = new AlbumController();
            $albumController->show('ultraviolence');
        }

        if (
            isset($this->uriArray[0], $this->uriArray[1]) &&
            $this->uriArray[0] === 'album' &&
            $this->uriArray[1] === 'lyric-challenge'
        ) {
            $albumController = new AlbumController();
            $albumController->show('lyric-challenge');
        }        

        
    }
    
}

