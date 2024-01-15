<?php

    $serverName = "localhost";
    $dbUsername = "livini";
    $dbPassword = "L.qdllN])VN]GWJ6";
    $dbName = "chgs";

    $myConn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

    if(!$myConn){
        die("Connection failed : " . mysqli_connect_error()); 
     }
     else{
         //echo "its working";
     }
     

?>
