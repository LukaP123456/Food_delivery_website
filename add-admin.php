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
<!-- Header managment dela start-->
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

<div class="main-content">
    <div class="wrapper">
        <h1>Add admin</h1>

        <?php
            if (isset($_SESSION['add'])){//prover dal je session setovan
                echo $_SESSION['add'];//prikaze session poruku ako je setovan
                unset($_SESSION['add']);//izbrisie sessions poruku
            }
        ?>

        <form action=""method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="full_name" placeholder="Enter your name:"></td>

                </tr>

                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" placeholder="Enter your Username:"></td>

                </tr>

                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" placeholder="Enter your Password:"></td>

                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add admin" class="add-btn">
                    </td>
                </tr>



            </table>

        </form>
    </div>
</div>

<?php
    //Procesuiramo data iz forme i sacuvamo je u bazu
    //Proveravamo da li je dugme submit kliknuto

    if(isset($_POST['submit']))
    {

        //dugme je kliknuto

        //Uzimamo podatke iz baze
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);//password_hash sluzi za enkripciju sifre

        //SQL kveri koji stavlja podatke u bazu
        $sql = "INSERT INTO tbl_admin SET full_name ='$full_name',username = '$username', password = '$password' ";

        //Excutujemo kveri i cuva podatke u bazu
        include ("constants.php");

        $res = mysqli_query($conn,$sql) or die(mysqli_error());

        //Proverava da li je kveri izvrsen i data insertovan ako nije pokazace poruku
        if ($res == true){
            //data uneta u bazu
            //pravim session varijablu koja pokazuje poruku
            $_SESSION['add'] = "<div class='add-message'>Admin added successfully</div>";

            //redirect page to manage-admin
            header("location: ".SITE_URL."manage-admin.php");


        }
        else{
            $_SESSION['add'] = "<div class='add-message'>Failed to add admin</div>";

            //redirect page to add-admin
            header("location: ".SITE_URL."add-admin.php");


        }



    }


?>


</body>
</html>
