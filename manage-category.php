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
        include "constants.php";

    ?>

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
            <h1>Manage Category</h1>
            <!-- Button za dodavanje kateogirje -->
            <br><br>
            <?php
                if (isset($_SESSION['add'])) {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }

                if (isset($_SESSION['remove']))
                {
                    echo $_SESSION['remove'];
                    unset($_SESSION['remove']);
                }

                if (isset($_SESSION['delete']))
                {
                    echo $_SESSION['delete'];
                    unset($_SESSION['delete']);
                }

                if (isset($_SESSION['no-category-found']))
                {
                    echo $_SESSION['no-category-found'];
                    unset($_SESSION['no-category-found']);
                }

                if (isset($_SESSION['update']))
                {
                    echo $_SESSION['update'];
                    unset($_SESSION['update']);
                }
            ?>


            <a href="<?php echo SITE_URL;?>add-category.php" class="btn-primary">Add category</a>

            <table class="tbl-full">
                <tr>
                    <th>Serial number</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Featured</th>
                    <th>Active</th>
                    <th>Actions</th>
                </tr>

                <?php
                    //Kveri izvlaci sve iz tabele
                    $sql = "SELECT * from tbl_category";

                    //Izvrsavanje kverija
                    $res = mysqli_query($conn,$sql);

                    //Broji redove kao proveru kverija tj da li je tabela popunjena
                    $count = mysqli_num_rows($res);

                    //Serial number varijabla
                    $sn = 1;

                    if ($count > 0)
                    {
                        //puna tabela
                        //Uzima podatke i prikazuje ih
                        while ($row = mysqli_fetch_assoc($res))
                        {
                            $id = $row['id'];
                            $title = $row['title'];
                            $image_name = $row['image_name'];
                            $featured = $row['featured'];
                            $active = $row['active'];
                            ?>

                            <tr>
                                <td class="celija"><?php echo $sn++; ?>.</td>
                                <td class="celija"><?php echo $title; ?></td>

                                <td class="celija">
                                    <?php
                                    if ($image_name != " ")
                                    {
                                        //Ako imamo sliku pokazu sliku
                                        ?>

                                        <img src="<?php echo SITE_URL?>img/category/<?php echo $image_name; ?>" width="200px" >

                                        <?php

                                    }
                                    else
                                    {
                                        //Ako nemamo sliku pokazi poruku
                                        echo "<div class='error'> Image not added </div>";
                                    }


                                    ?>
                                </td>

                                <td class="celija"><?php echo $featured; ?></td>
                                <td class="celija"><?php echo $active; ?></td>
                                <td class="celija">
                                    <a href="<?php echo SITE_URL; ?>update-category.php?id=<?php echo $id ?>" class="btn-primary">Update category</a>
                                    <!-- umecanjem PHP mogu dinamicki dodati varijable -->
                                    <a href="<?php echo SITE_URL; ?>delete-category.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class="btn-delete">Delete category</a>
                                </td>

                            </tr>

                                <?php

                        }
                    }
                    else
                    {
                        //prazna tabela
                        //Prikaz error poruke unutar tabele
                        ?>

                        <tr>
                            <td colspan="6"><div class="error" > No category added</div></td>
                        </tr>

                        <?php
                    }


                ?>




            </table>
        </div>
    </div>
</div>

<!-- Tabela menadzera kraj-->


</body>
</html>











