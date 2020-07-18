<?php
	//Create connection
	$connection = mysqli_connect('localhost','root','','phplogin');
	

	$email = $_REQUEST['email'];
	$password= $_REQUEST['password'];
	
	$q = "INSERT INTO présence (iduser, datesign, time) VALUES ('$email', '$password')";
	
	$query = mysqli_query($connection,$q);
	if($query){
		echo ' Data Inserted Successfully';
        
		}
	
?>