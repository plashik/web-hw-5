<?php
    require("products.php");
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $products->query("DELETE FROM users WHERE id=$id");
    }
    header('location:list.php');
?>