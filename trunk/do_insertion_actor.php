<html>
<head>
	<tittle>Add Actor</tittle>
</head>
<body>
<?php
	$dbc = mysqli_connect('IP', 'username', 'pass', 'DB name')
		or die('Error connecting to server');
	
	$first_name = $_POST['first_name'];

	$last_name = $_POST['last_name'];
	
	$birthdate = $_POST['birthdate'];
	
	$bio = $_POST['bio'];
	
	$mpid = $_POST['mpid'];

	$cname = $_POST['cname'];

	$query = "INSERT INTO Movie_Professionals (mpid, first_name, last_name, birthdate, bio, cname) VALUES (" . $mpid . ", " . $first_name . ", " . $last_name . ", " . $birthdate . ", " . $bio . ", " . $cname . ")";

	$result = mysqli_query($dbc, $query)
		or die('Error querying DB');

	mysqli_close($dbc);

?>
</body>
</html>
