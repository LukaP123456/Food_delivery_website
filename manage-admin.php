<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Luka Prcic">
    <meta name="keywords" content="food delivery,pizza,burger,chicken,fast">
    <meta name="description" content="Fast food delivery website">
    <!--css link -->
    <link rel="stylesheet" href="CSS/admin.css">

    <!--font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <?php
        include_once ('constants.php');
        include "login-check.php";
    ?>



    <title>LP dostava hrane admin page</title>

</head>
<body>

<br><br><br>
<!-- Header managment dela start-->
<header>
    <a href="#" class="logo"><i class="fas fa-utensils"></i>resto.</a>
    <nav class="navbar">

        <a href="main.php">Stranica za musteriju</a>
        <a href="manage-food.php">Manage food</a>
        <a href="manage-category.php">Manage category</a>
        <a href="manage-order.php">Manage order</a>
        <a href="manage-admin.php">Admin pocetna</a>
        <a href="logout.php">Admin logout</a>


    </nav>

</header>
<!-- Header managment dela kraj-->
<!-- Tabela menadzera start-->

<div class="content">
<div class="main-content">
    <div class="wrapper">
        <h1>Manage Admin</h1>
        <!-- Button za dodavanje admina -->


        <?php
            if (isset($_SESSION['add'])){
               echo $_SESSION['add'];//Prikazace poruku u zavisnosti da li je uspelo uneti admina u bazu
               unset($_SESSION['add']);//izbrisace poruku nakon sto se prikaze
            }

            if (isset($_SESSION['delete']))
            {
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
            }

            if (isset($_SESSION['update']))
            {
                echo $_SESSION['update'];
                unset($_SESSION['update']);
            }

            if (isset($_SESSION['user-not-found']))
            {
                echo $_SESSION['user-not-found'];
                unset ($_SESSION['user-not-found']);

            }

            if (isset($_SESSION['password-not-match']))
            {
                echo $_SESSION['password-not-match'];
                unset ($_SESSION['password-not-match']);

            }
            if (isset($_SESSION['change-pwd']))
            {
                echo $_SESSION['change-pwd'];
                unset ($_SESSION['change-pwd']);

            }

            if (isset($_SESSION['login']))
            {
                echo $_SESSION['login'];
                unset ($_SESSION['login']);
            }

        ?>

        <br><br><br>
        <a href="add-admin.php" class="btn-primary">Add admin</a>

        <table class="tbl-full">
            <tr>
                <th>Serial number</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Action</th>
            </tr>

            <?php
                //Kveri koji uzima sve iz tbl_admin
                $sql = "SELECT * from tbl_admin";
                $res = mysqli_query($conn,$sql);

                //Proveri dal je kveri izvrsen
                if ($res == true){
                    //Izbroji redove da proveri da li imamo podatke u bazi
                    $count = mysqli_num_rows($res);//fukcija za brojanje redova u bazi

                    $sb = 1;//prikazuje serijski broj

                    //provera broja redova
                    if ($count > 0){
                        //imamo podatke u bazi
                        while ($rows = mysqli_fetch_assoc($res)){//uzima sve redove iz baze i stavlja u $rows
                            $id = $rows['id'];
                            $full_name =$rows['full_name'];
                            $username = $rows['username'];

                            //prikaz podataka u tabeli
                            ?>
                            <tr>
                                <td class="celija"><?php echo $sb++;?></td>
                                <td class="celija"><?php echo $full_name;?></td>
                                <td class="celija"><?php echo $username;?></td>
                                <td class="celija">
                                    <a href="<?php echo SITE_URL;?>update-password.php?id=<?php echo $id; ?>" class="btn-password">Change password</a>
                                    <a href="<?php echo SITE_URL;?>update-admin.php?id=<?php echo $id; ?>" class="btn-primary">Update admin</a>
                                    <a href="<?php echo SITE_URL; ?>/delete-admin.php?id=<?php echo $id;?>" class="btn-delete">Delete admin</a>
                                </td>
                            </tr>

                            <?php

                        }
                    }
                    else{
                        //nemamo podatke u bazi
                    }
                }


            ?>



        </table>

    </div>
</div>
</div>

<!-- Tabela menadzera kraj-->





</body>
</html>













