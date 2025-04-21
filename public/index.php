
#require '../app/core/setup.php';
# use app\core\Router;
# $router = new Router();

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../app/core/setup.php';

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

<!DOCTYPE html>
<html>
<head>
    <title>Lana Catalog</title>
</head>
<body>
    <h1>Lana Del Rey Products 🌹</h1>
    <?php foreach ($products as $product): ?>
        <div style="border:1px solid #ccc; margin: 1rem; padding: 1rem;">
            <h2><?= $product['name'] ?></h2>
            <img src="<?= $product['image'] ?>" width="300">
            <p><?= $product['description'] ?></p>
            <strong>$<?= $product['price'] ?></strong>
        </div>
    <?php endforeach; ?>
</body>
</html>

