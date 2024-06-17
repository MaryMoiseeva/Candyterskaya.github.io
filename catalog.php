<?php
require 'db.php';

$stmt = $pdo->query("SELECT * FROM products");
$products = $stmt->fetchAll();

foreach ($products as $product) {
    echo "<div class='product'>";
    echo "<img src='uploads/{$product['image']}' height='250px' width='250px'/>";
    echo "<h3>{$product['name']}</h3>";
    echo "<p>{$product['description']}</p>";
    echo "<p>{$product['price']} рублей</p>";
    echo "<button data-id='{$product['id']}'>Добавить в корзину</button>";
    echo "</div>";
}
?>