
<?php
include "header.php";
include "stil.php";
include_once "constants-front.php";
?>
<!-- category sekcija start-->
<section class="menu" id="menu">

    <h3 class="sub-heading"> our menu </h3>
    <h1 class="heading"> today's speciality</h1>
<?php
    //Sql kveri koji uzima podatke iz baze
    $sql = "select * from tbl_category where active='Yes' and featured='Yes' ";

    //izvrsavanje kverija
    $res = mysqli_query($conn,$sql);

    $count = mysqli_num_rows($res);
    if ($count > 0)
    {
        while ($row = mysqli_fetch_assoc($res))
        {
            $id = $row['id'];
            $title = $row['title'];
            $image_name = $row['image_name'];
            ?>
                <div class="box-container">

                    <div class="box">
                        <div class="image">
                            <?php
                                //provera da li postoji slika ili ne
                                if ( $image_name == " " )
                                {
                                    echo "<div class='error'> Image not available </div> ";
                                }
                                else
                                {
                                    ?>
                                    <img src="<?php echo SITE_URL;?>img/category/<?php echo $image_name; ?>">
                                    <?php

                                }
                            ?>

                            <a href="#" class="fas fa-heart"></a>
                        </div>
                        <div class="content">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <h3><?php echo $title;?></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, molestiae!</p>
                            <a href="#" class="btn">add to cart</a>
                            <span class="price">$12.99</span>
                        </div>
                    </div>

                </div>
            <?php

        }
    }
    else
    {
        echo "<div class = 'error' > Cateogry not added. </div>";
    }


?>


</section>
<!-- category sekcija kraj-->