<?php
    include "constants.php";

    //Uzima id admina koji ce se obrisati
    echo $id = $_GET['id'];

    //Kveri za brisanje admina
    $sql = "DELETE FROM tbl_admin where id = $id";

    $res = mysqli_query($conn,$sql);

    if ($res == true)
    {
        //echo "Admin deleted succesfully";
        //session varijabla za poruku o brisanju
        $_SESSION['delete'] = "<div class='succes'>Admin deleted succesfully.</div>";
        header('location:'.SITE_URL.'manage-admin.php');

    }
    else
    {
       // echo "Admin delete failed";
        $_SESSION['delete'] = "<div class = 'error'>Failed to delete admin try again</div>";
        header('location:'.SITE_URL.'manage-admin.php');

    }

    //Vraca na manage admin page sa poruk (uspeh/error)



?>