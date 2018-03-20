<?php
//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost','kpiasdot_dev17','root@KPIAS123','kpiasdot_dev17');
//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

?>