<html>
<head>
	<title>Add Movie</title>
</head>
<body>
<?php
	$dbc = mysqli_connect('IP', 'username', 'pass', 'DB name')
		or die('Error connecting to server');
	
	$title = $_POST['title'];

	$year = $_POST['year'];
	
	$language = $_POST['language'];
	
	$description = $_POST['description'];
	
	$mid = $_POST['mid'];

	$query = "INSERT INTO Movies (mid, title, year, language, description) VALUES (" . $mid . ", " . $title . ", " . $year . ", " . $language . ", " . $description . ")";

	$result = mysqli_query($dbc, $query)
		or die('Error querying DB');

	mysqli_close($dbc);

?>
</body>
</html>
