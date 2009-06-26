<html><head><title>Movies</title></head>
<body>
<?php
	$dbc = mysqli_connect('IP', 'username', 'pass', 'DB name')
		or die('Error connecting to server');
	
	$query = "SELECT * FROM Movies M";

	$result = mysqli_query($dbc, $query)
		or die('Error querying DB');

	mysqli_close($dbc);

	echo $result;
?>
</body>
</html>

