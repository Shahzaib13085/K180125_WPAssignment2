<?php



$servername = $_POST["server_name"];
$username = $_POST["user"];
$password = $_POST["pass"];
$database = $_POST["database"];
$query = $_POST["query"];

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if ($result = $conn -> query($query)) {
  echo "TABLE IS CREATED";
  // Free result set
  $result -> free_result();
}




?>
