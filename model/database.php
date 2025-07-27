<?php

//database connection details
$servername = "cfmysqldb.ccrghj6qojpg.us-east-1.rds.amazonaws.com";
$username = "admin"
$password = "Password";
$database = "awsexample";

//connect to the database
try {
	//connect to the database
	$conn = new PDO(dsn: "mysql:host=$servername;dbname=$database", username: $username, password: $password);
	//set the PDO error mode to exception
	$conn->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);
}
catch (PODException $e) {
	echo "Connetion failed: " . $e->getMessage();
}

?>