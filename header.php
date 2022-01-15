<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Luka Prcic">
    <meta name="keywords" content="food delivery,pizza,burger,chicken,fast">
    <meta name="description" content="Fast food delivery website">


    <title>LP dostava hrane</title>

    <!--font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--css link -->
    <link rel="stylesheet" href="CSS/stajl.css">

    <!-- bootstrap include section -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<!--header start-->

<header>
    <a href="#" class="logo"><i class="fas fa-drumstick-bite"></i>LP dostava</a>
    <nav class="navbar">
        <a class="active" href="main.php">home</a>
        <a href="dishes.php" >dishes</a>
        <a href="main.php">about</a>
        <a href="categories.php">Categories</a>
        <a href="#review">review</a>
        <a href="order.php">order</a>
        <a href="manage-admin.php">Admin login</a>
        <?php
        //session_start();

        if (isset($_SESSION['user']))
        {

            echo " <a href='logout.php'>Admin logout</a>";
        }
        ?>



    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <a href="dishes.php" class="fas fa-search" id="search-icon"  ></a>

        <a href="#" class="fas fa-heart"></a><!--fas fa-bars selektuje ikonicu za srce iz font-awesome drugi isto rade -->
        <a href="order.php" class="fas fa-shopping-cart"></a>


    </div>
</header>
<!-- header kraj -->