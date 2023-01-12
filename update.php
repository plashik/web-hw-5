<?php
    require("products.php");

    if ($_SERVER['REQUEST_METHOD'] === 'GET')
    {
        $id = $_GET['id'];
        $products = $products->query("SELECT * FROM products WHERE id=$id")->fetchAll(PDO::FETCH_ASSOC);
        $products = $products[0];
    }

    else if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $id = $_POST['id'];
        $productname = $_POST['productname'];
        $producttag = $_POST['producttag'];

        $products->query("UPDATE products SET name = '$productname', tag = '$producttag' WHERE id=$id");

        header('location:index.php');
    }
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
    <title>Редактировать продукт</title>
</head>

<body>
    <header>
        <a id = "back" href = "list.php"> <span>Назад</span> </a>
    </header>

    <form action="update.php" method="POST">
            <div> <input type = "text" name = "name" required value="<?php echo $products['name'] ?>"/> </div>
            <div> <input type = "text" name = "text" required value="<?php echo $products['text'] ?>"/> </div>
            <div> <input type = "text" name = "size" value="<?php echo $products['size'] ?>"/> </div>
            <div> <input type = "text" name = "price" required value="<?php echo $products['price'] ?>"/> </div>
            <div> <input type = "text" name = "img" value="<?php echo $products['img'] ?>"/> </div>
            <div> <input type="hidden" name="id" value="<?php echo $products['id'] ?>" /> </div>
            <div> <input id = "create_button" type = "submit" name="submit" value = "Изменить" /> </div>
    </form>
</body>

</html>