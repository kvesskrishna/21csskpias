<?php
//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost','kpiasdot_dbUser','frames@08W21A0541','kpiasdot_newDB');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

?>