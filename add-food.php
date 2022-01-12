<?php
include "admin-header.php";
?>

    <div class="main-content">
        <div class="wrapper">
            <h1>Add Food</h1>

            <br><br>
            <!-- enctype jer uplodujem slike -->
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
                            <input type="file" accept="image/*">
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
                                            ?>
                                            <option value="<?php echo $id; ?>"><?php echo $title; ?></option>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        //Ukoliko nemamo kategoriju
                                        ?>
                                        <option value="0">No category found</option>
                                        <?php
                                    }




                                ?>

                            </select>
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

        </div>
    </div>
