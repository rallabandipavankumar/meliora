<?php

    $servername="localhost";
    $username="id22360552_root";
    $password="Meliora@123";
    $dbname="id22360552_project";

    $conn= mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn){
        die("Connection failed:".mysqli_connect_error());
    }
?>