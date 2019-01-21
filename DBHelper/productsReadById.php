    <?php
include '../config/connect.php';
//$wh=$_GET['id'];
$sql = "SELECT * FROM Products WHERE id_type=$wh";
$res = mysqli_query($connection, $sql);
?>

        <?php while($r = mysqli_fetch_assoc($res)){ ?>
            <div class="card">
                <img src="<?php echo $r['image']; ?>">
                <h2><?php echo $r['nazev'] ?></h2>
                <p><?php echo $r['description'] ?></p>
                <p><?php echo $r['price'] ?>,- CZK</p>
                <a href="addtocart.php?id=<?php echo $r['id']; ?>" class="btn btn-primary" role="button">Add to Cart</a>
            </div>

    <?php } ?>