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
    include ('constants.php');
    ?>
    <title>Login - adminf for food delivery system</title>
</head>
<body>

        <div class="login">
            <h1>Login</h1>
            <?php
                if (isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset( $_SESSION['login']);
                }

                if (isset($_SESSION['no-login-message']))
                {
                    echo  $_SESSION['no-login-message'];
                    unset( $_SESSION['no-login-message']);
                }

            ?>
            <br>

            <!-- login forma start -->
            <form action="" method="post">
                <label for="username">Username: </label><br>
                <input type="text" name="username" placeholder="Enter your username" id="username"><br><br>
                <label for="password">Password: </label><br>
                <input type="password" name="password" placeholder="Enter your password" id="password"><br><br>
                <input type="submit" name="submit" value="login" class="btn-primary">
                <br><br>




            </form>

            <!-- login forma kraj -->


            <p>Crated by <a href="#">Luka Prcic</a></p>
        </div>

</body>
</html>

<?php
    //Provera da li je submit dugme za login klkiknuto
    if (isset($_POST['submit']))
    {
        //uzmia podatke iz login forme
         $username = $_POST['username'];
         $password =$_POST['password'] ;

         //sql kveri koji proverava da li postoje username i password koji je unet
         $sql = "SELECT * from tbl_admin where username = '$username'";

         //izvrsavanje kverija
         $res = mysqli_query($conn,$sql);

         $data = mysqli_fetch_assoc($res);
         if (password_verify($password, $data['password']))
         {

            //Broji redove kao provera da li postoi user
            $count = mysqli_num_rows($res);

            if ($count == 1) {
                //User available login succes
                $_SESSION['login'] = "<div class='succes'>Login successfull.</div>";

                //provera da li je admin loginovan ili ne, logout ce ga unsetovat
                $_SESSION['user'] = $username;
                //Vraca na homepage
                header("location:" . SITE_URL . 'manage-admin.php');

            }
            else
            {
                //User not available login error
                $_SESSION['login'] = "<div class='error'>Username or Password did not match.</div>";
                //Vraca na homepage
                header("location:" . SITE_URL . 'login.php');
            }
        }
        else
        {
            $_SESSION['login'] = "<div class='error'>Username or password incorrect.</div>";

            header("location:" . SITE_URL . 'login.php');
        }






    }

    ?>



?>