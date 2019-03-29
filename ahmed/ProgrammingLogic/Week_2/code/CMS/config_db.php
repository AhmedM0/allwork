<?php 
	// connect to bd
	$server = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "ckeditor";

	$connect = new mysqli($server,$user,$pass,$dbname) or die('ERROR');


?>