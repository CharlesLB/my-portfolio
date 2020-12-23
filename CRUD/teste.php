<?php
$servername = "200.131.96.47";
$username = "alunolp2i";
$password = "lp2iBD_2019";
$dbname = "alunolp2i";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO g33_experiences (name, initial_date, final_date, description, location)
VALUES ('Charles', '2002-01-25', '2002-09-27', 'Locatutor', 'Radio')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>