<?php
require_once '../app/core/setup.php';
require_once '../app/core/Router.php';


use app\core\Router;
$router = new Router();  // handles routing like /album/born-to-die


// if Router handles the request, stop here
if (!empty($router->uriArray[1])) {
   return;
}


// if no route matched, fall back to homepage (product catalog)
error_reporting(E_ALL);
ini_set('display_errors', 1);


try {
   $pdo = new PDO(
       "mysql:host=" . DBHOST . ";dbname=" . DBNAME,
       DBUSER,
       DBPASS
   );
   $stmt = $pdo->query("SELECT * FROM products");
   $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
   die("Database error: " . $e->getMessage());
}
?>



