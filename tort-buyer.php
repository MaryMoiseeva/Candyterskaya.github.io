<!DOCTYPE html> 
<html lang="ru"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Candyterskaya</title> 
    <link rel="stylesheet" href="tort-piroshnie.css"> 
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head> 
<body> 
    <header> 
        <h1>Candyterskaya</h1> 
        <nav> 
            <ul> 
                <li><a href="index-buyer.html">Каталог</a></li> 
                <li><a href="index-buyer.html">Обратная связь</a></li>
                <li><a href="cart.php">Корзина</a></li>
                <li><a href="login.html" target="_self">Вход</a></li> 
                <li><a href="regestretion.html" target="_self">Регистрация</a></li>
            </ul> 
        </nav> 
    </header> 

    <main> 
        <section id="tort"> 
            <h1>Торты</h1>

            <?php

            require 'db.php';

            $stmt = $pdo->query("SELECT * FROM products WHERE category like 'cake'");
            $products = $stmt->fetchAll();

            foreach ($products as $product) {
                echo "<div class='product'>";
                echo "<div class='cake1'>";
                echo "<img src='uploads/{$product['image']}' height='200px' width='200px'/>";
                echo "</div>";
                echo "<div>";
                echo "<h3>{$product['name']}</h3>";
                echo "<p>{$product['description']}</p>";
                echo "<p>{$product['price']} рублей</p>";
                echo "<button data-id='{$product['id']}' onclick='btnClick(this)'>Добавить в корзину</button>";
                echo "</div>";
                echo "</div>";
            }

            ?>

    </main>

    <script src="add_to_cart.js"></script>

    <footer> 
        <p>&copy; 2024 Кондитерская</p> 
    </footer> 
</body> 
</html>