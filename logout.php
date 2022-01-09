<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/admin.css">

    <title>admin-logout page</title>
</head>
<body>

</body>
</html>


<?php

    include "constants.php";
    //Brisemo session
    session_destroy();//unsetuje  $_SESSION['user']

    //Vracamo na login page
    header("location".SITE_URL."login.php");

    echo "<div class='succes'> Admin successfully logged out  </div>"




?>
