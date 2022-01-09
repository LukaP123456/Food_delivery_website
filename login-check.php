<?php
    //Provera da li je admin logged in ili ne
    if (!isset($_SESSION['user']))
    {
        //vratice na
        $_SESSION['no-login-message'] = "<div class='error'> Please login to acces admin panel </div>";
        header("location:".SITE_URL."login.php");
    }


?>