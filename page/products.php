
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

<main>

    <div class="center-wrapper">
        <div>
            <div>

                <div class="flex-wrap">
                    <div class="card">
                        <img src="../images/homePage/laptop.jpg" alt="lap"/>
                        <h2>Laptops</h2>
                        <p>Come on in and check out our AWESOME laptops!</p><br><br>
                        <a href="productPage.php?id=1">
                            <div>More...</div>
                        </a>
                    </div>

                    <div class="card">
                        <img src="../images/homePage/acc.jpg" alt="acc"/>
                        <h2>Accessories</h2>
                        <p>Do you need accessories for your device? Dont wait up and continue on this page!</p><br>
                        <a href="productPage.php?id=2">
                            <div>More...</div>
                        </a>
                    </div>

                    <div class="card">
                        <img src="../images/homePage/phone.jpg" alt="phone"/>
                        <h2>Phones</h2>
                        <p>Are you looking for new smart phone? You will certainly find your match here!</p><br><br>
                        <a href="productPage.php?id=3">
                            More...
                        </a>
                    </div>

                    <a href="../config/exportProducts.php">Export products</a>

                    <?php
                    if(isset($_SESSION['username'])){
                        if($_SESSION['username']=='root') {?>
                            <a href="../DBHelper/productTypeImport.php">Import product types from file</a>
                        <?php }} ?>
                </div>
            </div>
        </div>

    </div>
</main>

    <?php include '../spolecne/footer.php' ?>


</html>
