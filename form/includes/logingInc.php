<?php

    if(isset($_POST["submit"])){
        $username = $_POST["uid"];
        $pwd = $_POST["pwd"]; 

        require_once "dbhInc.php";
        require_once "functionsInc.php";

        if(emptyInputLogin($username, $pwd) !== false){
            header("Location:../loging.php?error=emptyinput");
            exit();
        }

        loginUser($myConn, $username, $pwd);

    }

    else{
        header('location:../loging.php');
        exit();
    }

?>