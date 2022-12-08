<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BookBox";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE BookBox";
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
$sql = "CREATE TABLE stock(
    id VARCHAR(10)  PRIMARY KEY,
    name VARCHAR(100) ,
    type VARCHAR(50),
    publish VARCHAR(50),
    company VARCHAR(100),
    price INT(10),
    amount INT(10),
    img VARCHAR(250)
    )";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully"."<BR>";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();

?>