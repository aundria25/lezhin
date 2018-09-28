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


$sql = "DELETE FROM MyGuests WHERE id=3";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}


$conn->close();
?>
