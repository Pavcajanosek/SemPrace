
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
$sql = "SELECT * FROM Orders WHERE id_user =  (SELECT id_user FROM users WHERE username='$name')";
$res = mysqli_query($connection, $sql);
?>
<div class="center-wrapper">
    <div class="flex-wrap">
        <div id="tab">
            <h2>Order history</h2>
            <?php include "../DBHelper/ordersRead.php";?>

        </div>
    </div>
</div>