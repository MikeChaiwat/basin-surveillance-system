<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "khaoyai";
    $db = new mysqli($server,$user,$pass,$database);
    if($db->connect_error){
        die("Connection failed: ".$db->connect_error);
    }
?>