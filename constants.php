<?php

    //Session start
    session_start();



    //Ovde cuvam podatke koji se ponavljaju
    const LOCALHOST = 'localhost';
    const DB_USERNAME = 'root';
    const DB_PASSWORD = 'root';
    const DB_NAME = 'food-order';
    const SITE_URL = 'http://localhost/DOSTAVA_PROJEKAT/main.php?';


    $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error());//Konekcija za bazu
    $db_select = mysqli_select_db($conn,DB_NAME) or die(mysqli_error());//selektuje bazu

?>
