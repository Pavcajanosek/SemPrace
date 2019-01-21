<?php
/**
 * Created by PhpStorm.
 * User: pavca
 * Date: 12/30/18
 * Time: 4:33 PM
 */

?>


<form method="post">
    <p>Username</p>
    <input type="text" name="username" placeholder="Karel123"/><br>

    <p>Password</p>
    <input type="password" name="password" placeholder="*******"/><br>
    <p>E-mail</p>
    <input type="text" name="email" placeholder="karel@123.com"/><br><br>

    <input type="submit" name="isSubmited" value="Register"/><br><br>

    <a href="login.php">I already have a account! Login</a>

</form>
<?php
if(isset($_POST['isSubmited'])){
include ("../config/connect.php");

$vusername=$_POST['username'];
$vpassword=$_POST['password'];
$vemail=$_POST['email'];

$sql = "INSERT INTO users(username, password, email) VALUES ('$vusername', '$vpassword', '$vemail')";

if ($connection->query($sql)) {
echo "New record created successfully";
header('location: ../index.php');
} else {
echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();
}
?>