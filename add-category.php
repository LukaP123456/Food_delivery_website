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

<!-- add-category main deo start-->
    <div class="main-content">
        <div class="warpper">
            <h1>Add category</h1>
            <br><br>

            <?php
                if (isset($_SESSION['add']))
                {
                    echo $_POST['add'];
                    unset($_SESSION['add']);
                }

            if (isset($_SESSION['upload']))
            {
                echo $_POST['upload'];
                unset($_SESSION['upload']);
            }

            ?>
            <br><br>

            <!-- Pocetak category  forme-->
            <form action="" method="post" enctype="multipart/form-data"><!--enctype="multipart/form-data" mi omogucava da uplodujem fajl -->

               <table class="tbl-30">
                   <tr>
                       <td>Title:</td>
                       <td>
                           <input type="text " name="title" placeholder="Category title">
                       </td>
                   </tr>

                   <tr>
                       <td>Select image:</td>
                       <td>
                           <input type="file" name="image">
                       </td>
                   </tr>

                   <tr>
                       <td>Featured:</td>
                       <td>
                           <input type="radio" name="featured" value="Yes" >Yes
                           <input type="radio" name="featured" value="No" >No
                       </td>
                   </tr>

                   <tr>
                       <td>Active: </td>
                       <td>
                           <input type="radio" name="active" value="Yes">Yes
                           <input type="radio" name="active" value="Yes">No
                       </td>
                   </tr>

                   <tr>
                       <td colspan="2">
                           <input type="submit" name="submit" value="Addd Category" class="btn-primary">
                       </td>
                   </tr>

               </table>
            </form>
            <!-- Kraj category  forme-->
            <?php
                include "constants.php";
                //Provera da li je submit dugme kliknuto
                if (isset($_POST['submit']))
                {
                    //Uzima podatke iz forme
                    $title = $_POST['title'];

                    //Provera za radio input tip da li je dugme radio selektovano
                    if (isset($_POST['featured']))
                    {
                        $featured = $_POST['featured'];
                    }
                    else
                    {
                        $featured = "No";
                    }

                    if (isset($_POST['active'])){
                        $active = $_POST['active'];
                    }
                    else
                    {
                        $active = "No";
                    }

                    //Provera da li slika selektovana i setuje ime slike
                    print_r($_FILES['image']);//print_r prikazuje vrednost niza echo to nece

                    //die();


                    if (isset($_FILES['image']['name']))
                    {
                       //ako $_FILES ima naziv u arraju slika ce se uploadat
                        $image_name = $_FILES['image']['name'];

                        $source_path = $_FILES['image']['tmp_name'];

                        $destination_path = "img/category/".$image_name;
                        //Upload
                        $upload = move_uploaded_file($source_path,$destination_path);

                        //Provera da li je slika uploadovana, ako nije zaustavljamo proces sa redirect porukom
                        if ($upload == false)
                        {
                            $_SESSION['upload'] = "'<div class='error'> Failed to upload image. </div>'";
                            header("location:".SITE_URL."add-category");
                            //zaustavlja proces
                            die();
                        }

                    }
                    else
                    {
                        $image_name = "";
                    }


                    //Sql kveri za insertovanje podataka u bazu
                    $sql = "insert into tbl_category set title = '$title',featured = '$featured',active = '$active', image_name = '$image_name'";

                    //Izvrsavanje kverija i cuvanje u bazu
                    $res = mysqli_query($conn,$sql);

                    //Provera da li kveri izvrsen a data ubacena
                    if ($res == true)
                    {
                        //Kveri izvrsen i kategorija dodata
                        $_SESSION['add'] = "<div class='succes'> Category added successfully </div> ";
                        header("location:".SITE_URL."manage-category.php");
                    }
                    else
                    {
                        $_SESSION['add'] = "<div class='error'> Failed to add category </div> ";
                        header("location:".SITE_URL."manage-category.php");

                    }



                }

            ?>

        </div>
    </div>



<!-- add-category main deo kraj-->



</body>
</html>