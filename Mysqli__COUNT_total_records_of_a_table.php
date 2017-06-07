<?php
//Open a new connection to the MySQL server
$mysqli = new mysqli('host','username','password','database_name');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

//get total number of records
$results = $mysqli->query("SELECT COUNT(*) FROM users");
$get_total_rows = $results->fetch_row(); //hold total records in variable

$mysqli->close();
?>