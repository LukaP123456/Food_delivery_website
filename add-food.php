<?php
include "admin-header.php";

//ob_start();



?><div class="main-content">
        <div class="wrapper">
            <h1>Add Food</h1>

            <br><br>

<?php
                if (isset($_SESSION['upload']))
                {
                    echo $_SESSION['upload'];
                    unset($_SESSION['upload']);
                }



            ?> <!-- enctype jer uplodujem slike -->
            <form action="" method="POST" enctype="multipart/form-data">

                <table class="tbl-30">
                    <tr>
                        <td>Title:</td>
                        <td>
                            <input type="text" name="title" placeholder="Title of the food">
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Description:</td>
                        <td>
                            <textarea name="description" id="opis" cols="30" rows="5" placeholder="Description of the food" class="text-area-drop-down"></textarea>
                        </td>
                    </tr>

                    <tr>
                        <td>Price:</td>
                        <td>
                            <input type="number" name="price" >
                        </td>
                    </tr>

                    <tr>
                        <td>Select image:</td>
                        <td>
                            <input type="file" name="image" accept="image/*">
                        </td>
                    </tr>

                    <tr>
                        <td>Category:</td>
                        <td>
                            <select name="category" class="text-area-drop-down">
<?php
                                    //prikaz podataka iz baze
                                    //kveri
                                    //Na osnovu da li je kateogirja aktivna ili ne prikazace se kategorija iz baze
                                    $sql = "select * from tbl_category where active = 'Yes' ";

                                    $res = mysqli_query($conn,$sql);

                                    $count = mysqli_num_rows($res);
                                    if ($count > 0)
                                    {
                                        //imamo kategorije
                                        while ($row = mysqli_fetch_assoc($res))
                                        {
                                            //uzima podatke o kategoriji iz baze
                                            $id = $row['id'];
                                            $title = $row['title'];

                                            ?><option value="<?php echo $id; ?>"><?php echo $title; ?></option>
<?php
                                        }
                                    }
                                    else
                                    {
                                        //Ukoliko nemamo kategoriju

                                       echo "<option value='0'>No category found</option>";

                                    }


                          ?></select>
                        </td>
                    </tr>

                    <tr>
                        <td>Featured:</td>
                        <td>
                            <input type="radio" name="featured" value="Yes">Yes
                            <input type="radio"  name="featured" value="No">No
                        </td>
                    </tr>

                    <tr>
                        <td>Active:</td>
                        <td>
                            <input type="radio"  name="active" value="Yes">Yes
                            <input type="radio" name="active" value="No">No
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add Food" class="btn-primary">
                        </td>
                    </tr>

                </table>


            </form>

<?php
                include_once "constants.php";

                //insertovanje u bazu
                //provera da li je dugme kliknuto
                if (isset($_POST['submit']))
                {
                    //dodavanje hrane u bazu
                    //uzimanje podataka iz forme
                    $title = $_POST['title'];
                    $description = $_POST['description'];
                    $price = $_POST['price'];
                    $category = $_POST['category'];

                    if (isset($_POST['featured']))
                    {
                        $featured = $_POST['featured'];
                    }
                    else
                    {
                        $featured = "No"; //default vrednost
                    }

                    if (isset($_POST['active']))
                    {
                        $active = $_POST['active'];
                    }
                    else
                    {
                        $active = "No";
                    }
                    //ubacivanje slike ako je selektovana
                    //provera da li je select image kliknut i upload slike ako jeste
                    if (isset($_FILES['image']['name']) && $_FILES['image']['size'] != 0)
                    {
                            //uzima detalje selektovane slike
                            $image_name = $_FILES['image']['name'];
                            //provera da li je slika uploadovana ako neko klikne cancel bez ovoga ne bi radilo

                            //upload slike, src_path je trenutno mesto slike
                            $source_path = $_FILES['image']['tmp_name'];

                            //mesto na koje se uploaduje slike
                            $destination_path = "img/food/".$image_name;

                            $upload = move_uploaded_file($source_path,$destination_path);

                            if ($upload == false)
                            {
                                $_SESSION['upload'] = "<div class='error'> Failed to upload image </div>";
                                header("location:".SITE_URL."add-food.php");
                                die();
                            }



                    }
                    else
                    {
                        $image_name = ""; //slika nije izabrana dodeljuje se default vrednost
                    }


                    //ubacivanje u bazu
                    $sql2 = "INSERT into tbl_food set 
                                title='$title',
                                description='$description',
                                price=$price,
                                image_name = '$image_name',
                                category_id=$category,
                                featured='$featured',
                                active='$active'
                                ";

                    $res2 = mysqli_query($conn,$sql2);
                    //provera da li je izvrsen kveri i vracanje na manage-food.php
                    if ($res2 == true)
                    {
                        //podaci uspesno ubaceni u bazu
                        $_SESSION['add2'] = "<div class='succes'> Food added successfully </div>";
                        header("location:".SITE_URL."manage-food.php");
                    }
                    else
                    {
                        $_SESSION['add2'] = "<div class='error'> Failed to add Food </div>";
                        header("location:".SITE_URL."manage-food.php");
                    }

                }




            //ob_end_flush();//ovo resilo ovaj error Warning: Cannot Modify Header Information - Headers Already Sent By (Output Started At C:\Xampp\Htdocs\DOSTAVA_PROJEKAT\Add-Food.Php:89) In C:\Xampp\Htdocs\DOSTAVA_PROJEKAT\Add-Food.Php On Line 200


            ?></div>
    </div>
