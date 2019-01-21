<form method="post">
    <p>First Name</p>
    <input type="text" name="jmeno" placeholder="Karel"/><br>
    <p>Surname</p>
    <input type="text" name="prijmeni" placeholder="Pan"/><br>
    <p>Address</p>
    <input type="text" name="adresa" placeholder="Skalice nad Svitavou 666"/><br>
    <p>Credit card</p>
    <input type="text" name="karta" placeholder="0000-0000-0000-0000"/><br><br>
    <input type="submit" name="isSubmited" value="Finalise"/><br><br>
</form>


<?php
if(isset($_POST['isSubmited'])){
    include ("../config/connect.php");
    $vjmeno=$_POST['jmeno'];
    $vprijmeni=$_POST['prijmeni'];
    $vadresa=$_POST['adresa'];
    $vcreditcard=$_POST['karta'];
    $sql = "INSERT INTO Orders_details(Jmeno, Prijmeni, Adresa, Karta) 
            VALUES ('$vjmeno', '$vprijmeni', '$vadresa','$vcreditcard')";

    if ($connection->query($sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }


    if(isset($_SESSION['cart'])) {
        $items = $_SESSION['cart'];
        $cartitems = explode(",", $items);



        foreach ($cartitems as $key => $id) {
            $sql = "SELECT * FROM Products WHERE id = $id";
            $res = mysqli_query($connection, $sql);
            $r = mysqli_fetch_assoc($res);
            $id = $r['id'];
            $price = $r['price'];
            if (isset ($_SESSION['username'])) {
                $uname = $_SESSION['username'];
            } else {
                $uname = "annonymousUser";
            }

            $uname=$_SESSION['username'];


            $sql2 = "INSERT INTO Orders(id_product,price,id_user,id_order_details)
            VALUES (
            $id,
            $price,
            (SELECT id_user FROM users WHERE username='$uname'),
            (SELECT id_orders_details FROM Orders_details WHERE Jmeno='$vjmeno' and Prijmeni='$vprijmeni' and Adresa='$vadresa' and Karta='$vcreditcard')
            )";


            if ($connection->query($sql2)) {
                echo "New record created successfully <br>";
                unset($_SESSION['cart']);

            } else {
                echo "Error: " . $sql . "<br>" . $connection->error;
            }

            $connection->close();

            header('location: ../index.php');
        }
    }
}

?>
