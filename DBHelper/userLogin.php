
<form method="post">
    <p>Username</p>
    <input type="text" name="username" placeholder="Karel123"/><br>

    <p>Password</p>
    <input type="password" name="password" placeholder="*******"/><br><br>

    <input type="submit" name="isSubmited" value="Login"/><br><br>

    <a href="register.php">I dont have a account! Register</a>

</form>


<?php
if(session_status()==PHP_SESSION_NONE){
session_start();
}
include '../config/connect.php';

if (isset($_POST['username']) and isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $res = mysqli_query($connection, $sql);

    if($r = mysqli_fetch_assoc($res)){
        echo $r["username"];
        echo $r["email"];
        $_SESSION['username'] = $r["username"];
        $_SESSION['userType']= $r["userType"];

        header('location: ../index.php');

    }else{
        $message = "Wrong username or password!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        ?><title>Wrong login</title><?php
    }
}

?>
