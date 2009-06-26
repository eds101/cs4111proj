<html><head><title>Movies</title></head>
<body>
<?php
	$dbc = mysqli_connect('IP', 'username', 'pass', 'DB name')
		or die('Error connecting to server');
	$mid = $_GET['mid'];

	echo $result;

	$query = "SELECT * 
		FROM Movies M
		WHERE M.mid = $mid";

	$result = mysqli_query($dbc, $query)
		or die('Error querying DB');

	$query = "SELECT * 
		FROM Movie_Professionals P, Worked_On R 
		WHERE R.mid = $mid and R.mpid = P.mpid";

	$result = mysqli_query($dbc, $query)
		or die('Error querying DB');

	echo $result;

	$query = "SELECT * 
		FROM Quotes Q
		WHERE Q.mid = $mid";

	$result = mysqli_query($dbc, $query)
		or die('Error querying DB');

	echo $result;

	$query = "SELECT * 
		FROM Movie_Is_In M
		WHERE M.mid = $mid";

	$result = mysqli_query($dbc, $query)
		or die('Error querying DB');

	echo $result;

	$query = "SELECT * 
		FROM Has_Genre G
		WHERE G.mid = $mid";

	$result = mysqli_query($dbc, $query)
		or die('Error querying DB');

	echo $result;

	$query = "SELECT * 
		FROM Movie_Is_From M
		WHERE M.mid = $mid";

	$result = mysqli_query($dbc, $query)
		or die('Error querying DB');

	echo $result;

	$query = "SELECT * 
		FROM Filmed_In F
		WHERE F.mid = $mid";

	$result = mysqli_query($dbc, $query)
		or die('Error querying DB');

	echo $result;

	$query = "SELECT * 
		FROM Movie_Won M
		WHERE M.mid = $mid";

	$result = mysqli_query($dbc, $query)
		or die('Error querying DB');

	echo $result;

	mysqli_close($dbc);
?>
</body>
</html>

