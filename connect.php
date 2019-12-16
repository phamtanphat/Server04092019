<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databasename = "quanlysinhvien";

    $con = new mysqli($hostname,$username,$password,$databasename);
    $con->query("SET NAMES 'utf8'");
    
?>