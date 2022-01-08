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


    <title>Los Pollos Hermanos admin page</title>

</head>
<body>

<br><br><br>
<!-- Header  deo start-->
<header>
    <a href="#" class="logo"><i class="fas fa-utensils"></i>resto.</a>
    <nav class="navbar">

        <a href="main.php">Stranica za musteriju</a>
        <a href="manage-food.php">Manage food</a>
        <a href="manage-category.php">Manage category</a>
        <a href="manage-order.php">Manage order</a>
        <a href="manage-admin.php">Admin pocetna</a>

    </nav>

</header>
<!-- Header  deo kraj-->

<!-- Update main  deo start-->

<div class="main-content">
    <div class="wrapper">
        <h1>Update Admin</h1>
        <br><br>

        <?php
            include "constants.php";
            //Uzima id selektovanog admina
            $id = $_GET['id'];

            //Sql kveri koji uzima detalje o adminu iz baze
            $sql = "SELECT * from tbl_admin where id = $id";

            $res = mysqli_query($conn,$sql);

            //Provera dal je kveri izvrsen
            if ($res == true)
            {
                $count = mysqli_num_rows($res);//izbrojace koliko ima redova
                if ($count == 1)
                {
                    $row = mysqli_fetch_assoc($res);//ovo vraca asocijativni niz gde su nazivi kolona baza asocijacije za povlacenje podataka

                    $full_name = $row['full_name'];
                    $username = $row['username'];
                }
                else
                {
                    //vraca na manage admin stranicu ako admin id ne postoji
                    //ako npr stavim id 9999999999 vratice na manage-admin.php stranu
                    header("location:".SITE_URL.'manage-admin.php');
                }
            }

        ?>

        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td>
                        <input type="text" name="full_name" value="<?php echo $full_name; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username" value="<?php echo $username; ?>">
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update Admin" class="btn-primary">
                    </td>
                </tr>
            </table>
        </form>
    </div>

<?php

    //Proverava da li je submit dugme pritisnuto ili ne
    if (isset($_POST['submit']))
    {
        //Uzima sve podatke iz forme kako bi updejtovo
        $id = $_POST['id'];
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];

        //Sql kveri za updejtovanje admina
        $sql = "UPDATE tbl_admin SET full_name = '$full_name',username = '$username' where id = '$id'";

        //Izvrsavanje kverija
        $res = mysqli_query($conn,$sql);

        if ($res == true)
        {
            //kveri izvrsen i admin updejtovan
            $_SESSION['update'] = "<div class='succes'>Admin updated successfully</div>";

            //vraca na manage-admin.php
            header("location:".SITE_URL.'manage-admin.php');
        }
        else
        {
            //ADmin nije izvrsen
            $_SESSION['update'] = "<div class='error'>Failed to delete admin</div>";

            //vraca na manage-admin.php
            header("location:".SITE_URL.'manage-admin.php');
        }

    }




?>

</div>



<!-- Update main deo kraj-->



</body>
</html>













