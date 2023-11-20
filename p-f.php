<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$conn = mysqli_connect('127.0.0.1', 'root', 'HELLO@4321','test1');

// get the post records
$txtName = $_POST['name'];
$txtNum = $_POST['num'];



if(!$conn){
	echo 'Connection error: ' ;
}


$sql = "INSERT INTO registration VALUES ('$txtNum','$txtName')";
	if ($conn->query($sql) === TRUE) {
	echo "Record added!";
} else {
	echo "Error:". $conn->error;
}
$conn->close();
