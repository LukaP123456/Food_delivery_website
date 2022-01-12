<?php
include "admin-header.php";

?>

<!-- Telo update-category start-->

<div class="main-content">
    <div class="wrapper">
        <br>
        <h1>Update category</h1>
        <br><br>

        <?php
            //$current_image = "";
            //provera da li je $id setovan
            $current_image = " ";
            if (isset($_GET['id']))
            {
                $id = $_GET['id'];
                //kveri
                $sql = "SELECT * from tbl_category where id = $id";
                //izvrsavanje
                $res = mysqli_query($conn,$sql);
                //broj redova
                $count = mysqli_num_rows($res);

                if ($count == 1)
                {
                    $row = mysqli_fetch_assoc($res);
                    $title = $row['title'];
                    $current_image = $row['image_name'];
                    $ruta = "./category/".$current_image."";
                    $featured = $row['featured'];
                    $active = $row['active'];

                }
                else
                {
                    $_SESSION['no-category-found'] = '<div class="error"> Category not found </div>';
                    header("location:".SITE_URL.'manage-category.php');
                    $current_image = "";
                }
            }
            else
            {
                header('location:'.SITE_URL.'manage-category.php');
            }

        ?>

        <form action="" method="POST" enctype="multipart/form-data">
            <table class="tbl-30">
                <tr>
                    <td>Title</td>
                    <td><input type="text" name="title" value="<?php echo $title; ?>"></td>
                </tr>

                <tr>
                    <td>Current image:</td>
                    <td>
                        <?php
                            //prikaz slike

                            if ($current_image !=" ")
                            {
                                //prikaz slike

                                ?>

                                <img src="<?php echo SITE_URL ?>img/category/<?php echo $current_image ?> " alt="" width="150px">
                                <?php


                            }
                            if ($current_image == " ")//postoji razila izmedju "" i " "
                            {
                                echo "<div class='error'> Image not Added </div> ";
                            }



                        ?>
                    </td>
                </tr>

                <tr>
                    <td>New image:</td>
                    <td>
                        <input type="file" name="image" accept="image/*">
                    </td>
                </tr>

                <tr>
                    <td>Featured:</td>
                    <td>
                        <!-- U zavisnosti od toga sta featured dobije iz baze bice checkovan taj radio button $featured uzima vrednost iz baze u add-category -->
                        <input <?php if ($featured == "Yes"){echo "checked";} ?> type="radio" name="featured" value="Yes"> Yes
                        <input <?php if ($featured == "No"){echo "checked";} ?> type="radio" name="featured" value="No"> No
                    </td>
                </tr>

                <tr>
                    <td>Active: </td>
                    <td>
                        <input <?php if ($active == "Yes"){echo "checked";} ?> type="radio" name="active" value="Yes"> Yes
                        <input <?php if ($active == "No"){echo "checked";} ?> type="radio" name="active" value="No"> No
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <input type="hidden" name="current_image" value="<?php echo $current_image; ?>">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="update" class="btn-primary">
                    </td>
                </tr>



            </table>
        </form>

        <?php

            if (isset($_POST['update']))
            {
                //uzeti podatke iz forme
                $id = $_POST['id'];
                $title = $_GET['title'];
                $current_image = $_POST['current_image'];
                $featured = $_POST['featured'];
                $active = $_POST['active'];

                //updejt slike u novu sliku


                //updejt baze
                $sql2 = "update tbl_category set title = '$title', featured = '$featured' active = '$active', where id = $id ";

                $res2 = mysqli_query($conn,$sql2);



                //redirect na manage-category
                if ($res2 == true)
                {
                    //updejtovalo
                    $_SESSION['update'] = '<div class="succes"> category updated successfully. </div>';
                    header("location:".SITE_URL."manage-category.php");
                }
                else
                {
                    //nije updejtovalo
                    $_SESSION['update'] = '<div class="error"> failed to update category. </div>';
                    header("location:".SITE_URL."manage-category.php");
                }
            }




        ?>
    </div>
</div>


<!-- Telo update-category kraj-->

