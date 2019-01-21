<?php

include "connect.php";

function readAll($q){


    $res = mysqli_query($connection, $q);


    return $res;
}
?>