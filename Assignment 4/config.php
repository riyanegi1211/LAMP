<?php
    $hostname="localhost";
    $username="root";
    $password="";
    $database="web";

    $conn= mysqli_connect($hostname, $username, $password, $database);

    if($conn)
    {
        echo "Connection Successful....";
    }
    else
    {
        echo "Connection Failed...." + mysqli_connect_error();
    }

?>