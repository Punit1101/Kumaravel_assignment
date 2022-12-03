<?php
    $localhost= "localhost";
    $username= "root";
    $password="";
    $dbname= "emp";

    $conn= mysqli_connect($localhost, $username, $password, $dbname);

    if(!isset($conn)){
        echo "not connect";
    }
    

?>