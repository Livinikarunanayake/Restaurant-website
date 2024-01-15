<!-- including header file -->
<?php
    include_Once "header.php";
?>


<!-- MAIN CODE-->
    <div class="form">

        <h1>Welcome</h1>

        <form action = "includes/signupInc.php" method = "post"> 
            <input type="text" id="fname" name="name" placeholder="Name">
            <input type="text" id="lname" name="email" placeholder="Email">
            <input type="text" id="fname" name="uid" placeholder="Username">
            <input type="password" id="lname" name="pwd" placeholder="Password">
            <input type="password" id="lname" name="pwdrepeat" placeholder="Repeat Password">

            <button name = "submit" type = "submit">Register</button>

        </form>

        <?php

            if(isset($_GET["error"])){
                if($_GET["error"] == 'emptyinput'){
                    echo '<div class="error">Fill in the all fields</div>';
                }
                
                else if($_GET["error"] == 'invaliduid'){
                    echo '<div class="error">Invalid Username !</div>';
                }

                else if($_GET["error"] == 'invalidemail'){
                    echo '<div class="error">Invalid Email !</div>';
                }

                else if($_GET["error"] == 'passwordnotmatch'){
                    echo '<div class="error">Passwords does not match !</div>';
                }

                else if($_GET["error"] == 'usernametaken'){
                    echo '<div class="error">Username already exists !</div>';
                }
                
                else if($_GET["error"] == 'none'){
                    echo '<div class="error">Account created !</div>';
                }


            }

        ?>


        <p>Already have an account ? <a href= "loging.php">Login</a> </p>
    </div>


    
<!-- including footer file -->
<?php
    include_once "footer.php";
?>