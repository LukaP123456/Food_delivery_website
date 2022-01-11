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
                    $title = $row["title"];
                    $current_image = $row["image_name"];
                    $featured = $row["featured"];
                    $active = $row["active"];

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

        <form action="" method="post" enctype="multipart/form-data">
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

                            if ($current_image !="")
                            {
                                //prikaz slike
                                ?>
                                <img src="<?php echo SITE_URL; ?>category/<?php echo $current_image; ?> " alt="">
                                <?php

                            }
                            else
                            {
                                //prikaz poruke
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
                        <input type="radio" name="featured" value="Yes"> Yes
                        <input type="radio" name="featured" value="No"> No
                    </td>
                </tr>

                <tr>
                    <td>Active: </td>
                    <td>
                        <input type="radio" name="active" value="Yes"> Yes
                        <input type="radio" name="active" value="No"> No
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <input type="submit" name="update" class="btn-primary">
                    </td>
                </tr>



            </table>
        </form>
    </div>
</div>


<!-- Telo update-category kraj-->

