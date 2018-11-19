<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/layout.css?version=51">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pavlovo | Web developer</title>
</head>

<?php

include "../spolecne/navPanel.php"?>

<?php
include '../config/connect.php';
$sql = "SELECT * FROM users";
$res = mysqli_query($connection, $sql);
?>
<div class="center-wrapper">
    <div class="flex-wrap">
        <div id="tab">
        <h2>Users</h2>

        <table>

            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>UserType</th>
            </tr>
        <?php while($r = mysqli_fetch_assoc($res)){ ?>
            <tr>
                <td><?php echo $r['id_user'] ?></td>
                <td><?php echo $r['username'] ?></td>
                <td><?php echo $r['email'] ?></td>
                <td><?php echo $r['userType'] ?></td>

            </tr>


        <?php } ?>

        </table>
        </div>
    </div>
</div>