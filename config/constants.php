<?php

    //Iniciar sesion
    //session_save_path('/tmp');
    session_start();


    define('SITEURL', 'http://localhost/mypizza/admin/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'mypizzadb');

    //conexion a bbdd
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die(mysqli_error());


?>