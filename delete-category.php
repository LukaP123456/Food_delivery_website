    <?php

    include "constants.php";
    /*
    echo "Delete page";
    die();
    */
    //Provera da li je id i image_name vrednost setovano
    //Ukoliko nisu setovani npr neko pokusava preko url da izbrise neku kategoriju nece moci jer id i image_name nisu setovani
    //vratice ih na manage-category.php stranu


    if (isset($_GET['id']) && isset($_GET['image_name']))
    {
        echo "Get value and delete";

        $id = $_GET['id'];
        $image_name = $_GET['image_name'];




        if ($image_name != "" && $_FILES['size'] > 0  )
        {
            $path = "img/category/".$image_name;

            //Brise sliku
            //unlink ima bool vrednost ako je uspeo izbrisati vrednost ima true
            $remove = unlink($path);

            if ($remove == false)
            {
                //ako ne uspeo izbrisati sliku izbacice error poruku i zaustaviti proces
                $_SESSION['remove'] = "<div class='error'>Failed to remove category image</div>";
                header("location:".SITE_URL."manage-category.php");
                die();
            }
        }

        //Sql upit za brisanje slike iz baze
        //Ukoliko nemam image_name brise na osnovu id podatak iz tabele

        $sql = "DELETE from tbl_category where id = $id ";

        //Izvrsavanje kverija
        $res = mysqli_query($conn,$sql);

        if ($res == true)
        {
            $_SESSION['delete'] = "<div class='succes'>Category successfully deleted</div>";
            header("location:".SITE_URL."manage-category.php");

        }
        else
        {
            $_SESSION['delete'] = "<div class='error'>Failed to delete category</div>";
            header("location:".SITE_URL."manage-category.php");

        }

    }
    else
    {
        header("location:".SITE_URL."manage-category.php");
    }




 ?>