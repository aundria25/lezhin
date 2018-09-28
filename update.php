<?php

$servername = "localhost";
$username = "root";
$password = "";
$Tdatabase = "lezhin";
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$username1 = $_POST['username'];
$password1 = $_POST['password'];

// Create connection
$conn = new mysqli ($servername, $username, $password, $Tdatabase);


$sql = "UPDATE register set firstname='$firstname', lastname='$lastname', age='$age', gender='$gender', username='$username', password='$password' WHERE     
	firstname = '$firstname'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
