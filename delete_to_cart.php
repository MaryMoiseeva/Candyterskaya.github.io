<?php
require 'db.php';

session_start();

if ($_SESSION['role'] !== 'buyer') {
    header('Location: login.html');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $stmt = $pdo->prepare("DELETE FROM cart WHERE id = {$_POST['cart_id']}");
    $stmt->execute();

    echo "Товар удален из корзины.";
}
?>