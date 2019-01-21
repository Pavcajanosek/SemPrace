
<?php
session_start();

if(isset($_GET['id']) & !empty($_GET['id'])){
    if(isset($_SESSION['cart']) & !empty($_SESSION['cart'])){

        $items = $_SESSION['cart'];
        $cartitems = explode(",", $items);
        $items .= "," . $_GET['id'];
        $_SESSION['cart'] = $items;
            header('location: products.php?status=success');
    }else{
        $items = $_GET['id'];
        $_SESSION['cart'] = $items;
        header('location: products.php?status=success');
    }
}else{
    header('location: products.php?status=failed');
}
?>