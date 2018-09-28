<?php

$servername = "localhost";
$username = "root";
$password = "";
$Tdatabase = "lezhin";
$firstname = $_POST['firstname'];

// Create connection
$conn = new mysqli ($servername, $username, $password, $Tdatabase);

$sql = "SELECT * FROM register WHERE firstname = '$firstname'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 	
 	while ($row = $result->fetch_assoc()) {
 		echo "<form method='post' action='update.php'";
 		echo "<input type='text' value=".$row["firstname"]." name='firstname' >";
 		echo "<input type='text' value=".$row["firstname"]." name='firstname'  >";
 		echo "<input type='text' value=".$row["lastname"]." name='lastname' >";
 		echo "<input type='text' value=".$row["age"]." name='age' >";
 		echo "<input type='text' value=".$row["gender"]." name='gender'>";
 		echo "<input type='text' value=".$row["username"]." name='username' >";
 		echo "<input type='text' value=".$row["password"]." name='password' >";
 		echo "<input type='submit' value='Edit'>";
 		echo "</form>";
 			echo "</table>";

 		;

}
}
  else {
    echo "Nothing Found";
}
 $conn->close();
?>