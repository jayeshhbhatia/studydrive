<?php
    ob_start();
    define("SERVER","localhost");
    define("USER","jayesh");
    define("PASSWORD","abc123");
    define("DB","studydrive");
    $connection=mysqli_connect(SERVER,USER,PASSWORD,DB);
    
    if($connection){
       // echo "We are connected!!";
    }
?>