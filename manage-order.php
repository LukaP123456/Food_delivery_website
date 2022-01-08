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
<!-- Header managment dela kraj-->
<!-- Tabela menadzera start-->

<div class="content">
    <div class="main-content">
        <div class="wrapper">
            <h1>Manage Order</h1>
            <br><br>

            <table class="tbl-full">
                <tr>
                    <th>Serial number</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Password</th>
                </tr>

                <tr>
                    <td class="celija">1.</td>
                    <td class="celija">Luka Prcic</td>
                    <td class="celija">lukaPrcic</td>
                    <td class="celija">
                        <a href="#" class="btn-primary">Update admin</a>
                        <a href="#" class="btn-delete">Delete admin</a>
                    </td>
                </tr>
                <tr>
                    <td class="celija">2.</td>
                    <td class="celija">Luka Prcic</td>
                    <td class="celija">lukaPrcic</td>
                    <td class="celija">
                        <a href="#" class="btn-primary">Update admin</a>
                        <a href="#" class="btn-delete">Delete admin</a>
                    </td>
                </tr>
                <tr>
                    <td class="celija">3.</td>
                    <td class="celija">Luka Prcic</td>
                    <td class="celija">lukaPrcic</td>
                    <td class="celija">
                        <a href="#" class="btn-primary">Update admin</a>
                        <a href="#" class="btn-delete">Delete admin</a>
                    </td>
                </tr>
                <tr>
                    <td class="celija">4.</td>
                    <td class="celija">Luka Prcic</td>
                    <td class="celija">lukaPrcic</td>
                    <td class="celija">
                        <a href="#" class="btn-primary">Update admin</a>
                        <a href="#" class="btn-delete">Delete admin</a>
                    </td>
                </tr>
                <tr>
                    <td class="celija">5.</td>
                    <td class="celija">Luka Prcic</td>
                    <td class="celija">lukaPrcic</td>
                    <td class="celija">
                        <a href="#" class="btn-primary">Update admin</a>
                        <a href="#" class="btn-delete">Delete admin</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<!-- Tabela menadzera kraj-->

<?php
include_once ('constants.php');
?>

</body>
</html>











