<!-- including header file -->
<?php
    include_Once "header.php";
?>


<!-- MAIN CODE-->
    <h1>Hello <?php 
        if(isset($_SESSION["username"])){
            echo $_SESSION["username"]. '!';
        }
        
        else{
            echo 'user !';
        }

        
        ?></h1>
    <p>Welcome to my new web system</p>

<!-- including footer file -->
<?php
    include_once "footer.php";
?>