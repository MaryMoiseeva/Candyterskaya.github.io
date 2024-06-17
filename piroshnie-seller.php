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
                <li><a href="seller.html">Каталог</a></li> 
                <li><a href="seller.html">Обратная связь</a></li> 
                <li><a href="login.html" target="_self">Вход</a></li> 
            </ul> 
        </nav> 
    </header> 

    <main> 
        <section id="piroshnie"> 
            <h1>Пирожные</h1>

            <?php

            require 'db.php';

            $stmt = $pdo->query("SELECT * FROM products  WHERE category like 'pastry'");
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
                echo "</div>";
            echo "</div>";
            }

            ?>

    </main> 

    <footer> 
        <p>&copy; 2024 Candyterskaya</p> 
    </footer> 
</body> 
</html> 