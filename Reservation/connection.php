<?php

    $serverName = "localhost";
    $dbUsername = "chanupa";
    $dbPassword = "mypassword";
    $dbName = "reservation";

    $connection = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

    if(!$connection){
       die("Connection failed : " . mysqli_connect_error()); 
    }
    else{
        echo "Its working";
    }
        
?>