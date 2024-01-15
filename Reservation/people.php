<?php session_start(); ?>
<?php require_once('connection.php'); ?>

<?php 
	

	$user_list = '';

	// getting the list of users
	$query = "SELECT * FROM userres WHERE persons ORDER BY id";
	$users = mysqli_query($connection, $query);

	
		global $connection;

		if (!$users) {
			die("Database query failed: " . mysqli_error($connection));
		}

	

	while ($user = mysqli_fetch_assoc($users)) {
		$user_list .= "<tr class='vg'>";
		$user_list .= "<td>{$user['name']}</td>";
		$user_list .= "<td>{$user['phoneNum']}</td>";
		$user_list .= "<td>{$user['day']}</td>";
        $user_list .= "<td>{$user['hour']}</td>";
        $user_list .= "<td>{$user['persons']}</td>";
		$user_list .= "<td><a href=\"modify-user.php?user_id={$user['id']}\">Edit</a></td>";
		$user_list .= "<td><a href=\"delete-user.php?user_id={$user['id']}\">Delete</a></td>";
		$user_list .= "</tr>";
	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reservations</title>
	<link rel="stylesheet" href="res.css">
</head>
<body>
	<header>
		<div class="appname">Reservation Management System</div>
		<div class="loggedin">Welcome ! <a href="logout.php" class="fr">Log Out</a></div>
	</header>

	<main>
		<h1 class="head">Reservations <span><a href="add-user.php" class="but">+ Add New</a></span></h1>

		<table class="masterlist">
			<tr>
				<th>Name</th>
				<th>Phone Number</th>
				<th>Day</th>
				<th>Hour</th>
				<th>No of People</th>
			</tr>

			<?php echo $user_list; ?>

		</table>
		
		
	</main>
</body>
</html>