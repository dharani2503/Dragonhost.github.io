<?php
    // This is a database connection file
    
    $hostname = "localhost";
    $username = "root";
    $password ="";
    $dbname = "project";

    $conn = mysqli_connect($hostname,$username,$password,$dbname);
        
    if(!$conn){
        var_dump(mysqli_connect_error());
    }

?>