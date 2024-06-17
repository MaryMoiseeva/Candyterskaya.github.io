<?php
require 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cartId = $_POST['id'];

    // Удаление товара из корзины
    $stmt = $pdo->prepare("DELETE FROM cart WHERE id = ? AND user_id = ?");
    $stmt->execute([$cartId, $_SESSION['user_id']]);

    // Пересчет общей суммы
    $stmt = $pdo->query("SELECT SUM(products.price) as total FROM cart INNER JOIN products ON products.id=cart.product_id WHERE cart.user_id = {$_SESSION['user_id']}");
    $total = $stmt->fetchColumn();
    $total = $total ?: 0; // Убедимся, что total не null

    echo json_encode(['success' => true, 'newTotal' => $total]);
} else {
    echo json_encode(['success' => false]);
}
?>