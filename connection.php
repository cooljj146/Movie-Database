<?php
    $host = "3.14.51.97"; 
    $username = "group_C_user";
    $password = "C10_group_C_2021";
    $dbname = "group_C_db";

    $conn = new mysqli($host, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        // echo "Connected successfully";
    }
?>