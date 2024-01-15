
<?php require_once('connection.php'); ?>

<?php 
	
	$name = '';
	$phoneNum = '';

	if (isset($_POST['submit'])) {
		
		$name = $_POST['username'];
		$phoneNum = $_POST['phoneNumber'];
        $day = $_POST['days'];
		$hour = $_POST['hours'];
        $persons = $_POST['person'];

	
			$name = mysqli_real_escape_string($connection, $_POST['username']);
			$phoneNum = mysqli_real_escape_string($connection, $_POST['phoneNumber']);
            $day = mysqli_real_escape_string($connection, $_POST['days']);
		    $hour = mysqli_real_escape_string($connection, $_POST['hours']);
            $persons = mysqli_real_escape_string($connection, $_POST['person']);


			$query = "INSERT INTO userres ( ";
			$query .= "name, phoneNum, day, hour, persons";
			$query .= ") VALUES (";
			$query .= "'{$name}', '{$phoneNum}', '{$day}', '{$hour}', '{$persons}'";
			$query .= ")";

			$result = mysqli_query($connection, $query);

			if ($result) {
				// query successful... redirecting to users page
				header('Location: users.php?user_added=true');
			} else {
				echo "Failed to add the new record ! ";
			}

		}


?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Reservation Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="reservation.css">
    </head>
    <body>
        
        <section class = "banner">
            <h2>BOOK YOUR TABLE NOW</h2>
            <div class = "card-container">
                <div class = "card-img">
                    <!-- image here -->
                </div>

                <div class = "card-content">
                    <h3>Reservation</h3>
                    <form method="post" action="" method="post" autocomplete="off">
                        <div class = "form-row">
                            <select name = "days" class="" required>
                                <option value = "day-select">Select Day</option>
                                <option value = "sunday">Sunday</option>
                                <option value = "monday">Monday</option>
                                <option value = "tuesday">Tuesday</option>
                                <option value = "wednesday">Wednesday</option>
                                <option value = "thursday">Thursday</option>
                                <option value = "friday">Friday</option>
                                <option value = "saturday">Saturday</option>
                            </select>

                            <select name = "hours" class="" required>
                                <option value = "hour-select">Select Hour</option>
                                <option value = "10">10: 00</option>
                                <option value = "10">12: 00</option>
                                <option value = "10">14: 00</option>
                                <option value = "10">16: 00</option>
                                <option value = "10">18: 00</option>
                                <option value = "10">20: 00</option>
                                <option value = "10">22: 00</option>
                            </select>
                        </div>

                        <div class = "form-row">
                            <input type = "text" placeholder="Full Name" name="username" required value="">
                            <input type = "text" placeholder="Phone Number" name="phoneNumber" required value="">
                        </div>

                        <div class = "form-row">
                            <input type = "number" placeholder="How Many Persons?" min = "1" name="person" required value="">

                            <button type="submit" name="submit">BOOK TABLE</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        
    </body>
</html>