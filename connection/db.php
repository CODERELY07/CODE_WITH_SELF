<?php
    $server_name = "localhost";
    $username = "root";
    $password = "";
    $db = "code_with_self";

    $conn = new mysqli($server_name,$username,$password,$db);

    if($conn->connect_error){
        echo "Connection Failed" . $conn->connect_error;
    }
?>