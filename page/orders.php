<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/layout.css?version=51">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome to PavcaMart</title>
</head>

<?php

include "../spolecne/navPanel.php"?>

<?php
include '../config/connect.php';
$name=$_SESSION['username'];
$sql = "SELECT * FROM Orders WHERE username = '$name'";
$res = mysqli_query($connection, $sql);
?>
<div class="center-wrapper">
    <div class="flex-wrap">
        <div id="tab">
            <h2>Order history</h2>

            <table>

                <tr>
                    <th>ID</th>
                    <th>Product ID</th>
                    <th>Price</th>
                    <th>Username</th>
                </tr>
                <?php while($r = mysqli_fetch_assoc($res)){
                    $id=$r['id_product'];
                    $sql2="SELECT * FROM Products WHERE id='$id'";
                    $res2=mysqli_query($connection,$sql2);
                    $r2=mysqli_fetch_assoc($res2);
                    $nazev = $r2['nazev'];
                    ?>
                    <tr>
                        <td><?php echo $r['id_order'] ?></td>

                        <td><?php echo $nazev ?></td>
                        <td><?php echo $r['price'] ?></td>
                        <td><?php echo $r['username'] ?></td>

                    </tr>


                <?php } ?>

            </table>
        </div>
    </div>
</div>