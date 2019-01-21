<form method="post" action="" >

    <table>

        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>UserType</th>
        </tr>
        <?php while($r = mysqli_fetch_assoc($res)){ ?>
            <tr>
                <?php $userId=$r['id_user']; ?>
                <td><?php echo $userId ?></td>
                <td><input type="text" name="username" value="<?php echo $r['username'] ?>"></td>
                <td><input type="text" name="email" value="<?php echo $r['email'] ?>"> </td>
                <td><?php echo $r['userType'] ?></td>
                <td><input type="submit" name="submit" value="Submit"></td>

            </tr>


        <?php } ?>

    </table>
</form>

<?php
if(isset($_POST['submit'])){
    $uName=$_POST["username"];
    $mail=$_POST["email"];
    $id=$_GET['data'];
    echo $uName;
    echo $id;
    $sql = "UPDATE users SET username='$uName',email='$mail' WHERE id_user=$id";
    if(mysqli_query($connection, $sql)){
        echo "successful";
        header('location: ./user.php');

    }else{
        echo "fail";
    }
}
?>