<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">

</head>


<header>
    <div id="header-web-title">PavcaMart |</div>

    <nav id="nav">
        <a href="/sem_pr/index.php">Home</a>
        <a href="/sem_pr/page/products.php">Products</a>
        <a href="/sem_pr/page/contactMe.php">Contact me</a>

        <a href="/sem_pr/page/cart.php">Cart</a>
        <title>Welcome to PavcaMart</title>


<?php
    if(!isset($_SESSION))
    {
            session_start();
    }
        if (isset($_SESSION['username'])) {?>
         <a href="/sem_pr/spolecne/logout.php">Logout</a>
            <a href="/sem_pr/page/orders.php">Order history</a>
            <?php if($_SESSION['username']=='root') {
                ?><a href="/sem_pr/page/user.php">Users</a>
            <?php }
            ?>

        <?php
            if($_SESSION['userType']="2") echo "Hello mr. " . $_SESSION['username'] ?>";
         <?
        }else{ ?>
            <a href="/sem_pr/page/register.php">Register</a>
            <a href="/sem_pr/page/login.php">Login</a>
        <?php }?>

    </nav>

</header>
