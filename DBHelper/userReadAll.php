
<?php
include '../config/connect.php';
$sql = "SELECT * FROM users";
$res = mysqli_query($connection, $sql);

echo '<table>

    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>UserType</th>
    </tr>';

while($r = mysqli_fetch_assoc($res)){
    $userId=$r["id_user"];
    echo'<tr>

            <td>' . $userId . '</td>
            <td>' . $r["username"] . '</td>
            <td>' . $r["email"] . '</td>
            <td>' . $r["userType"] . '</td>
            <td><a href="./editUser.php?data='.$userId.'">Edit</a> </td>

        </tr>';

}
echo '</table>';
?>
