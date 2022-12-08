<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookbox";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE bookbox";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully"."<BR>";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE user(
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(100),
    name VARCHAR(20),
    surename VARCHAR(20),
    email VARCHAR(40),
    birthday DATE ,
    tel VARCHAR(10))";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully"."<BR>";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();

?>