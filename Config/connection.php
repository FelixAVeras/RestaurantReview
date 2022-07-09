<?php


$connection = new mysqli('localhost', 'root', '', 'restaurantReviewDb');

if ($connection === false) { 
	die($connection->connect_error); 
}

//$connection->close();

?>