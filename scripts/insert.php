<?php
	// 1. Create a database connection
	//    use external file *instead of* including db credentials here
	require_once("config.php");

	// Usually this data would come from HTML form values in $_POST
	// - edit these three lines with your information...
	$firstName = Trim(stripslashes($_POST['firstName']));
	$lastname = Trim(stripslashes($_POST['lastname']));
	$email = Trim(stripslashes($_POST['email']));
	$phoneNumber = Trim(stripslashes($_POST['phoneNumber']));

	
	// 2. Perform database query
	$query  = "INSERT INTO contacts (firstName, lastname, email, phoneNumber) VALUES ('$firstName','$lastname','$email','$phoneNumber')";
	$result = mysqli_query($connection, $query);

?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Database Insert</title>
</head>
<body>

	<h1>Database Insert</h1>

<?php
	if ($result) {
		echo "Success! - the query seemed to work! (At least it didn't error-out.)";
?>
<?php
	} else {
		die("Database query failed.");
	}
?>
</body>
</html><?php
	// 4. Step 4 is unnecessary here because we didn't 
	//	  get data that needs to be released
	//mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>s