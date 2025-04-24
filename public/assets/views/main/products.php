<!DOCTYPE html>
<html>
<head>
    <title>Lana Del Rey Products</title>
    <link rel="stylesheet" href="/assets/styles/homepage.css">
</head>
<body>
    <div class="container">
        <h1>Lana Del Rey Products</h1>
        <?php foreach ($products as $product): ?>
            <div style="border:1px solid #ccc; margin: 1rem; padding: 1rem;">
                <h2><?= $product['name'] ?></h2>
                <img src="<?= $product['image'] ?>" width="300">
                <p><?= $product['description'] ?></p>
                <strong>$<?= $product['price'] ?></strong>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
