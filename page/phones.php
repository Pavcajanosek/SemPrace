
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
    <a href="laptops.php">Laptops</a>
    <a href="accessories.php">Accessories</a>
    <a href="phones.php">Phones</a>
</div>
<main>

    <?php
    include '../config/connect.php';
    $sql = "SELECT * FROM Products WHERE id_type=3";
    $res = mysqli_query($connection, $sql);
    ?>
    <div class="center-wrapper">
        <div class="flex-wrap">

            <?php while($r = mysqli_fetch_assoc($res)){ ?>
                <div class="card">
                    <img src="<?php echo $r['image']; ?>" >
                    <h2><?php echo $r['nazev'] ?></h2>
                    <p><?php echo $r['description'] ?></p>
                    <p><?php echo $r['price'] ?>,- CZK</p>
                    <a href="addtocart.php?id=<?php echo $r['id']; ?>" class="btn btn-primary" role="button">Add to Cart</a>
                </div>

            <?php } ?>
        </div>

    </div>

</main>
<footer>
    <?php include '../spolecne/footer.php' ?>
</footer>

</body>
</html>