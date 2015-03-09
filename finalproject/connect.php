<?php
$dbhost = 'oniddb.cws.oregonstate.edu';
$dbname = 'armstrla-db';
$dbuser = 'armstrla-db';
$dbpass = 'KYpBFKl3kOw6nycP';
mysqli_select_db($dbname);
$success = NULL;
$mysqli = new mysqli($dbhost, $dbname, $dbpass, $dbuser);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>
