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

    </nav>

</header>
<!-- Header managment dela kraj-->
<!-- Tabela menadzera start-->

<div class="content">
    <div class="main-content">
        <div class="wrapper">
            <h1>Manage Food</h1>
            <!-- Button za dodavanje hrane -->
            <br><br>
<?php


                if (isset($_SESSION['add2']))
                {
                    echo $_SESSION['add2'];
                    unset($_SESSION['add2']);
                }


            ?><a href="add-food.php" class="btn-primary">Add food</a>



            <table class="tbl-full">
                <tr>
                    <th>Serial number</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Featured</th>
                    <th>Active</th>
                    <th>Actions</th>
                </tr>
                <?php
                    //skl kveri koji uzima hranu iz baze
                    $sql = "select * from tbl_food";

                    $res = mysqli_query($conn,$sql);

                    //broji redove
                    $count = mysqli_num_rows($res);

                    $sn = 1;

                    if ($count > 0 )
                    {
                        //imamo hranu u bazi
                        while($row = mysqli_fetch_assoc($res))
                        {
                            $id = $row['id'];
                            $title = $row['title'];
                            $price = $row['price'];
                            $image_name = $row['image_name'];
                            $featured = $row['featured'];
                            $active = $row['active'];

                            ?>
                            <tr>
                                <td class="celija"><?php echo $sn++ ?>.</td>
                                <td class="celija"><?php echo $title ?></td>
                                <td class="celija">$<?php echo $price ?></td>
                                <td class="celija">
                                    <?php
                                        //provera da li imamo sliku ili ne
                                        if ($image_name == "")
                                        {
                                            echo "<div class='error'> Image not added </div>";
                                        }
                                        else
                                        {
                                            //display slike
                                            ?>
                                            <img src="<?php echo SITE_URL; ?>img/food/<?php echo $image_name?>" width="150px">
                                            <?php
                                        }
                                    ?>
                                </td>
                                <td class="celija"><?php echo $featured ?></td>
                                <td class="celija"><?php echo $active ?></td>
                                <td class="celija">
                                    <a href="#" class="btn-primary">Update admin</a>
                                    <a href="#" class="btn-delete">Delete admin</a>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    else
                    {
                        //nemamo hranu u bazi
                        echo "<tr> <td colspan='7' class='error'> Food not added yet. </td> </tr>";
                    }



                ?>


            </table>
        </div>
    </div>
</div>

<!-- Tabela menadzera kraj-->



</body>
</html>











