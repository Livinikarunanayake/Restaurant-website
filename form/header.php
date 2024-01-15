<?php

    session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <ul> 
        <li><a class="active" href="index.php">Home</a></li>
        <!--<li><a href="#news">News</a></li>
        <li><a href="#contact">Contact</a></li> -->
        
            <?php 
                if(isset($_SESSION["username"])){
                    echo '<li style = "float:right" ><a href="includes/logoutInc.php">Logout</a></li>';
                    echo '<li style = "float:right" ><a href="profile.php">' . $_SESSION["username"]. '! </a></li>';
                    
                }
                
                else{
                    echo '<li style = "float:right" ><a href="loging.php">Login</a></li>';
                }
            ?>
         
    </ul>

    <div class="container" style="margin: 20px">