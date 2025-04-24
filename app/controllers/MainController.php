<?php

namespace app\controllers;
use app\core\Controller;


//this is an example controller class, feel free to delete
class MainController extends Controller {

    public function homepage() {
        $this->returnView('./assets/views/main/albums.php');
    }    

    public function notFound() {
    }

    public function albumsView() {
        $this->returnView('assets/views/main/albums.php');
    }
    
    public function productsView() {
        try {
            $pdo = new \PDO(
                "mysql:host=" . DBHOST . ";dbname=" . DBNAME,
                DBUSER,
                DBPASS
            );
            $stmt = $pdo->query("SELECT * FROM products");
            $products = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            die("Database error: " . $e->getMessage());
        }
    
        include('./assets/views/main/products.php');
    }
    
    
    
}


 