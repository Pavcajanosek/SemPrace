<table>

    <tr>
        <th>ID</th>
        <th>Product ID</th>
        <th>Price</th>
        <th>UserId</th>
    </tr>
    <?php while($r = mysqli_fetch_assoc($res)){
        $id=$r['id_product'];
        $sql2="SELECT * FROM Products WHERE id='$id'";
        $res2=mysqli_query($connection,$sql2);
        $r2=mysqli_fetch_assoc($res2);
        $nazev = $r2['nazev'];
        ?>
        <tr>
            <td><?php echo $r['id_order'] ?></td>

            <td><?php echo $nazev ?></td>
            <td><?php echo $r['price'] ?></td>
            <td><?php echo $r['id_user'] ?></td>

        </tr>


    <?php } ?>

</table>