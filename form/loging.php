<!-- including header file -->
<?php
    include_Once "header.php";
    
?>



<!-- MAIN CODE-->
    <div class="form">

        <h1>Welcome</h1>

        <form action = "includes/logingInc.php" method = "post"> 
            <input type="text" id="fname" name="uid" placeholder="Email/Username">
            <input type="password" id="lname" name="pwd" placeholder="Password">

            <button name = "submit" type = "submit">Login</button>

        </form>

        <?php

            if(isset($_GET["error"])){
                if($_GET["error"] == 'emptyinput'){
                    echo '<div class="error">Fill in the all fields</div>';
                }
                
                else if($_GET["error"] == 'wronglogin'){
                    echo '<div class="error">Invalid details !</div>';
                }

                else if($_GET["error"] == 'none'){
                    echo '<div class="error">Account created !</div>';
                }

            }

        ?>

        <p>New to here ? <a href= "signup.php">Register</a></p>
    </div>


    
<!-- including footer file -->
<?php
    include_once "footer.php";
?>