<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="reg.css">
    <script defer src="reg.js"></script>
</head>
<body>
    <div class="container">
        <form id="form" action="connect.php" method="post">
            <h1>Registration</h1>
            <div class="input-control">
                <label for="username">Username</label>
                <input id="username" name="username" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="fullname">Full Name</label>
                <input id="fullname"name="fullname" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="email">Email</label>
                <input id="email" name="email" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="password">Password</label>
                <input id="password"name="password" type="password">
                <div class="error"></div>
            </div>
            <div class="gender-details-box">
                <span class="gender-title">Gender</span>
                <div class="gender-category">
                    <input type="radio" name="gender" value="m" id="male">
                    <label for="male">Male</label>
                    <input type="radio" name="gender" value="f" id="female">
                    <label for="female">Female</label>
                    <input type="radio" name="gender" value="o" id="other">
                    <label for="other">Other</label>
                </div>
            </div>
            <!-- <div class="popup center">
                <div class="icon">
                    <i class="fa fa-check"></i>
                </div>
                <div class="title">
                    success!1
                </div>
                <div class="description">
                    sucessflly login to the system.
                </div>
                <div class="dismiss-btn">
                    <button id="dismiss-popup-btn">
                        Dismiss
                    </button>
                </div>
            </div> -->
            
                <button type="submit" name="submit" >Sign Up</button>
            
            <!-- class="btn" onclick="openPoup()" 
            id="open-popup-btn"-->
             <!-- <div class="popup" id="popup">
                 <img src="tick.png">  
                <h2>Thank You!!</h2>
                <p>Your details sucessfully submitted</p>
                <button type="button" onclick="closePoup()">ok</button>
            </div>  -->
        </form>
    </div>
</body>
</html>