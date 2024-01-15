<?php
    
    $submit =$_POST['submit'];
    $username =$_POST['username'];
    $fullname =$_POST['fullname'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $gender =$_POST['gender'];
    

    $conn = new mysqli('localhost','root','','test1');
    if($conn->connect_error){
        die('Connection Failed :'.$conn->connect_error);
    }else{
        $stmt =$conn->prepare("Insert into registration(username, fullname, email, password, gender)
        value(?,?,?,?,?)");
        $stmt->bind_param("sssss",$username , $fullname , $email , $password);
        $stmt->execute();
        echo "registration successfully";
        $stmt->close();
        $conn->close();
    }
?>
