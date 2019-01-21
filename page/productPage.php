
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/layout.css?version=51">
    <link rel="stylesheet" type="text/css" href="../css/leftNav.css?version=51">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome to Pavcamart</title>
</head>

<?php
include('../spolecne/navPanel.php')
?>
<body>
<div class="sidenav">
    <a href="productPage.php?id=1">Laptops</a>
    <a href="productPage.php?id=2">Accessories</a>
    <a href="productPage.php?id=3">Phones</a>
</div>
<main>

    <div class="center-wrapper">
        <div class="flex-wrap">
            <?php
            global $wh;
            $wh=$_GET['id'];
            include '../DBHelper/productsReadById.php';
            ?>
        </div>

    </div>
</main>

<footer>

    <?php
    include '../spolecne/footer.php' ?>
</footer>
</body>
</html>