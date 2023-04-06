<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="Signup_Login_page";
    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
        die("Connection Failed : ".$conn->connect_error);
    }
    echo "Connection Success";

  
    $conn->close();
?>