
<?php
include "../spolecne/hlavicka.php";
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

        <?php include"../DBHelper/userReadAll.php";

        ?>

</div>

    </div>
</div>
