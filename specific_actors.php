<html><head><title>Movie_Professionals</title></head>
<body>
<?php
	$dbc = mysqli_connect('IP', 'username', 'pass', 'DB name')
		or die('Error connecting to server');
	$mpid = $_GET['mpid'];

	$query = "SELECT * 
		FROM Movies M, Worked_On R 
		WHERE R.mpid = $mpid and R.mpid = M.mpid";

	$result = mysqli_query($dbc, $query)
		or die('Error querying DB');

	echo $result;

	$query = "SELECT * 
		FROM Prof_Is_In P
		WHERE P.mpid = $mpid";

	$result = mysqli_query($dbc, $query)
		or die('Error querying DB');

	echo $result;

	$query = "SELECT * 
		FROM Prof_Won P
		WHERE P.mpid = $mpid";

	$result = mysqli_query($dbc, $query)
		or die('Error querying DB');

	echo $result;

	mysqli_close($dbc);
?>
</body>
</html>

