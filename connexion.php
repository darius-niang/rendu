<?php
	//Create connection
	$connection = mysqli_connect('localhost','root','','phplogin');
	

	$name = $_REQUEST['firstname'];
	$lastname = $_REQUEST['lastname'];
	$email = $_REQUEST['email'];
	$password= $_REQUEST['password'];
	
	$q = "INSERT INTO students (Firstname, Lastname, Email, Password) VALUES ('$name', '$lastname', '$email', '$password')";
	
	$query = mysqli_query($connection,$q);
	if($query){
		echo ' Data Inserted Successfully';
        
		}
	
?>