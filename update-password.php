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
    ?>

    <title>LP dostava hrane admin page</title>

</head>
<body>

<br><br><br>
<!-- Header managment dela start-->
<header>
    <a href="#" class="logo"><i class="fas fa-utensils"></i>LP dostava admin</a>
    <nav class="navbar">

        <a href="main.php">Stranica za musteriju</a>
        <a href="manage-food.php">Manage food</a>
        <a href="manage-category.php">Manage category</a>
        <a href="manage-order.php">Manage order</a>
        <a href="manage-admin.php">Admin pocetna</a>

    </nav>

</header>
<!-- Header managment dela kraj-->

<!-- Password main  deo start-->
<div class="main-content">
    <div class="wrapper">
        <h1>Change password</h1>
        <br><br>

        <?php

            if (isset($_GET['id']))
            {
                $id = $_GET['id'];
            }



        ?>

        <form action="" method="POST"><!-- action ostaje prazan jer podatke menjamo na ovoj strani -->

            <table class="tbl-30">
                    <tr>
                        <td>Current password: </td>
                        <td><input type="password" name="current_password" placeholder="Current password"></td><!-- mozda nije potrebno jer adminu ne treba stara sifra kako bi je promenio -->
                    </tr>

                <tr>
                    <td>New password: </td>
                    <td>
                        <input type="password" name="new_password" placeholder="New password">
                    </td>
                </tr>
                
                <tr>
                    <td>Confirm password: </td>
                    <td>
                        <input type="password" name="confirm_password" placeholder="Confirm password">
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Change password" class="btn-primary">
                    </td>
                </tr>



            </table>

        </form>
        
    </div>
</div>

<?php
    //Provera da li je submit dugme pritisnuto
    if (isset($_POST['submit']))
    {
        //Uzima podatke iz forme
        $id = $_POST['id'];
        //$current_password = password_hash($_POST['current_password'],PASSWORD_DEFAULT);
        $current_password =$_POST['current_password'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];


        //Proverava da li korisnik sa trenutnim id i sifrom postoji
        $sql = "SELECT password FROM tbl_admin where id = $id ";//id je integer pa ne treba '' dok je current_password string

        //Proverava da li se nova sifra i confirm password podudaraju
        $res = mysqli_query($conn,$sql);

        $data = mysqli_fetch_assoc($res);
        if (mysqli_num_rows($res) == 1 && password_verify($current_password,$data['password']))
        {
            //count ce biti ako res vrati jednu sifru i jedan id ako su sifre iste id nece biti isti
            $count = mysqli_num_rows($res);
            if ($count ==1 )
            {
                //Korisnik postoji i sifra se moze promeniti
                //Proverava da li new password i confirm password se podudaraju
                if ($new_password == $confirm_password)
                {
                    $sql2 = "UPDATE tbl_admin SET password = '".password_hash($new_password,PASSWORD_DEFAULT)."' where id = $id";

                    $res2 = mysqli_query($conn,$sql2);
                    if ($res2 == true)
                    {
                        $_SESSION['change-pwd'] = "<div class = 'succes'> Password changed successfully. </div>";
                        header("location:".SITE_URL."manage-admin.php");
                    }
                    else
                    {
                        $_SESSION['change-pwd'] = "<div class = 'error'> Failed to change password. </div>";
                        header("location:".SITE_URL."manage-admin.php");
                    }

                }
                else
                {
                    //Ako unesemo razlicite pwd u polja bacice nas nazad na managment-admin.php
                    $_SESSION['password-not-match'] = "<div class = 'error'> Password did not match. </div>";
                    header("location:".SITE_URL."manage-admin.php");
                }

            }
            else
            {
                //Ako korisnik ne postoji tj neki id je neki nepostojeci broj kad kliknemo na change password dugme vratice na manage-admin.php stranu i pokazace error message
                //id korisnika i sifra se moraju podudarati inc ne moze se promeniti sifra
                $_SESSION['user-not-found'] = "<div class = 'error'> User not found. </div>";
                header("location:".SITE_URL."manage-admin.php");
            }
        }

        //Menja sifru ako je sve iznad istina


    }





?>





<!-- Password main  deo kraj-->