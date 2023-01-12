<?php 
    require("products.php");
    $id = $_GET['id'];
    $products = $products->query("SELECT * FROM products WHERE id=$id")->fetchAll(PDO::FETCH_ASSOC);
    $products = $products[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css\style.css">
    <title>Описание</title>
</head>

<body>
    <div class = "intro popular__item popular__section">
        <div class = "popular__description">
            <div class = "popular__text"> <?php echo $products['name'] ?> </div>
            <div class = "icon__item__desc__text"> <?php echo $products['text'] ?> </div>
            <div class = "icon__item__desc__text"> <?php echo $products['size'] ?> </div>
            <div class = "popular__text"> <?php echo $products['price'] ?> </div>
        </div>
        <img class="popular__image" src="<?= $products['img'] ?>">
    </div>
    <div class = "index__buttons">
            <a class = "btn" href="update.php?id=<?= $products['id']?>">Редактировать</a>
            <a class = "btn" onclick="return confirm('Вы уверены, что хотите удалить товар?')" href="delete.php?id=<?= $product['id']?>">Удалить</a>
            <a class = "btn" href="list.php">Все товары</a>
    </div>
</body>
</html>