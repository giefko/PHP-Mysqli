<?php
	// Connection to the DB
	$con = mysqli_connect("localhost","username","password");
	if (!$con){ die('Could not connect: ' . mysqli_connect_error()); }
	mysqli_select_db("dbName", $con);
	mysqli_query("SET NAMES 'utf8'");
	mysqli_query("SET CHARACTER SET 'utf8'");
?>