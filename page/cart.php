<?php
session_start();
require_once('../config/connect.php');
include('../spolecne/navPanel.php');
?>

<head>

    <link rel="stylesheet" type="text/css" href="../css/loHome.css">

</head>

<section id="hero">
<div class="container">
    <?php
    if(isset($_SESSION['cart'])){
    $items = $_SESSION['cart'];
    $cartitems = explode(",", $items);
    ?>
    <div class="row">
        <table class="table">
            <tr>
                <th>S.NO</th>
                <th>Item Name</th>
                <th>Price</th>
                <th></th>
            </tr>
            <?php
            $total = '';
            $i=1;
            foreach ($cartitems as $key=>$id) {
                $sql = "SELECT * FROM Products WHERE id = $id";
                $res=mysqli_query($connection, $sql);
                $r = mysqli_fetch_assoc($res);
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $r['nazev']; ?></td>
                    <td><?php echo $r['price']; ?>,- CZK</td>
                    <td><a href="delcart.php?remove=<?php echo $key; ?>">Remove</a> </td>
                </tr>
                <?php
                $total = $total + $r['price'];
                $i++;
            }
            ?>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td><strong>Total Price</strong></td>
                <td><strong><?php echo $total; ?>,- CZK</strong></td>
                <td><a href="checkoutDetails.php" class="btn btn-info">Checkout</a></td>
            </tr>
        </table>

    </div>
    <?php }else{

        echo "No items in cart";

    } ?>
</div>
</section>


<?php
    if(isset($_POST['isExported'])){
        $result = mysql_query($sql,$conecction);
        $fp = fopen('file.csv', 'w');
        while($row = mysql_fetch($result)){
            fputcsv($fp, $row);
        }
        fclose($fp);

    }




?>