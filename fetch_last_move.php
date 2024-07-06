<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dirctions";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT moves FROM robot ORDER BY ID DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row["moves"];
} else {
    echo "No moves found";
}

$conn->close();
?>
