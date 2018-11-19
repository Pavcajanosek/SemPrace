
<head>

    <link rel="stylesheet" type="text/css" href="../css/loHome.css">

</head>
<section id="hero">
<?php
include ("../config/connect.php");
include ("../spolecne/navPanel.php");
if(isset($_SESSION['cart'])) {
    $items = $_SESSION['cart'];
    $cartitems = explode(",", $items);


    foreach ($cartitems as $key => $id) {
        $sql = "SELECT * FROM Products WHERE id = $id";
        $res = mysqli_query($connection, $sql);
        $r = mysqli_fetch_assoc($res);
        $id = $r['id'];
        $price = $r['price'];
        $uname = $_SESSION['username'];




        $sql2 = "INSERT INTO Orders(id_product,price,username) 
VALUES ($id,$price,'$uname')";
        if ($connection->query($sql2)) {
            echo "New record created successfully <br>";
           // header('location: ../index.php');
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }


    }
    echo "Thank you for your order";
}

?>
</section>
