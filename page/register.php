<http>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/loRegister.css">
    </head>

    <?php
    include('../spolecne/navPanel.php')
    ?>
        <body>
            <section id="hero">
                <div id="reg">
                    <?php include '../DBHelper/userAdd.php';?>
                </div>
            </section>
        </body>
</http>



?>