<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to Pavcamart</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/loHome.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<?php
include('./spolecne/navPanel.php')
?>

<section id="hero">
    <div>
        <h1>Welcome to PavcaMart</h1>
        <h2>Choose product:</h2>
        <a href="page/productPage.php?id=1">
            <img id="menuL" src="images/homePage/laptop.jpg" alt="Notebooks" style="width:200px;height:200px;border:0;">
        </a>
        <a href="./page/productPage.php?id=2">
            <img id="menuA" src="images/homePage/acc.jpg" alt="Accessories" style="width:200px;height:200px;border:0;">
        </a>
        <a href="./page/productPage.php?id=3">
            <img id="menuP" src="images/homePage/phone.jpg" alt="Smart phones" style="width:200px;height:200px;border:0;">
        </a>
    </div>

</section>
</html>