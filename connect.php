<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databasename = "quanlysinhvien";

    $con = new mysqli($hostname,$username,$password,$databasename);
    mysqli_query("SET NAMES 'utf8'");
    
?>