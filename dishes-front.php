<title>LP dostava hrane dishes</title>
<?php
include "stil.php";
include "header.php";
include_once "constants-front.php"
?>

<!-- food/dishes sekcija pocetak -->

<section class="dishes" id="dishes">

    <h3 class="sub-heading">our dishes</h3>
    <h1 class="heading">popular dishes</h1>

    <?php
    //Uzimanje hrane iz baze koje su aktivni i featured
    //kveri
    $sql2 = "Select * from tbl_food where active='Yes' and featured='Yes'";

    //izvrsavanje
    $result = mysqli_query($conn,$sql2);

    //broji redove
    $count = mysqli_num_rows($result);

    //provera da li je hrana available
    if ($count > 0)
    {
        while ($row = mysqli_fetch_assoc($result))
        {
            //uzimanje podataka
            $id = $row['id'];
            $title = $row['title'];
            $price = $row['price'];
            $description = $row['description'];
            $image_name = $row['image_name'];
            ?>
            <div class="box-container">

                <div class="box">
                    <a href="#" class="fas fa-heart"></a><!--vrv cu izbrisati ovo -->
                    <a href="#" class="fas fa-eye"></a>
                    <?php
                    //provera da li postoji slika
                    if ($image_name == "")
                    {
                        echo "<div class='error'> Image not available </div> ";
                    }
                    else
                    {
                        ?>
                        <img src="<?php echo SITE_URL;?>img/food/<?php echo $image_name; ?>">
                        <?php
                    }
                    ?>

                    <h3><?php echo $title?></h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span>$<?php echo $price?></span>
                    <p><?php echo $description ?></p>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <?php
        }
    }
    else
    {
        echo "<div class='error'> Food not available </div> ";
    }
    ?>

</section>
<!--food/dishes sekcija kraj -->


