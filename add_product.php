<?php
require 'db.php';

session_start();

if ($_SESSION['role'] !== 'seller') {
    header('Location: login.html');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $category = $_POST['category'];

    move_uploaded_file($_FILES['image']['tmp_name'], "uploads/$image");

    $stmt = $pdo->prepare("INSERT INTO products (name, description, price, image, category) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$name, $description, $price, $image, $category]);

    header('Location: seller.html');
}
?>