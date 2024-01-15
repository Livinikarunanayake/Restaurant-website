<?php

    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $email = $_POST["email"]; 
        $username = $_POST["uid"];
        $pwd = $_POST["pwd"]; 
        $pwdRepeat = $_POST["pwdrepeat"];

        require_once "dbhInc.php";
        require_once "functionsInc.php";
        
        

        $emptyInput = emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat);
        $invalidUid = invalidUid($username);
        $invalidEmail = invalidEmail($email);
        $pwdMatch = pwdMatch($pwd, $pwdRepeat);
        $uidExists = uidExists($myConn, $username, $email);


        if($emptyInput !== false){
            header("Location:../signup.php?error=emptyinput");
            exit();
        }

        if($invalidUid !== false){
            header("Location:../signup.php?error=invaliduid");
            exit();
        }

        if($invalidEmail !== false){
            header("Location:../signup.php?error=invalidemail");
            exit();
        }

        if($pwdMatch !== false){
            header("Location:../signup.php?error=passwordnotmatch");
            exit();
        }

        if($uidExists !== false){
            header("Location:../signup.php?error=usernametaken");
            exit();
        }

        
        createUser($myConn, $name, $email, $username, $pwd);

    }

    else{
        header("Location:../loging.php");
        exit();
    }
