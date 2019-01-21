<?php
include "../spolecne/hlavicka.php";
include "../spolecne/navPanel.php";
if(isset($_GET["data"])){
  $id=$_GET["data"] ;

    include '../config/connect.php';
    $sql = "SELECT * FROM users WHERE id_user=$id";
    $res = mysqli_query($connection, $sql);?>
<div class="center-wrapper">
    <div class="flex-wrap">
        <div id="tab">
        <h2>Edit user</h2>
           <?php include "../DBHelper/userEdit.php";?>
        </div>
    </div>
</div>

<?php }
?>