<?php
$servername = "localhost";
$username = "username";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE 709156_Vipanpreet";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

// sql to create table
$sql = "CREATE TABLE employee (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
link VARCHAR(30),
gender VARCHAR(50),
address VARCHAR(50),
city VARCHAR(30),
province VARCHAR(30),
postal VARCHAR(30),
joining_date TIMESTAMP,
annualpay FLOAT
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "INSERT INTO 709156_Vipanpreet (firstname, lastname, email, link, gender, address, city, province, postal, joining_date, annualpay)
VALUES ('Vipan', 'kaur', 'vipan@example.com', 'https://github.com', female, 25fgg, xdd, ddd , dddd, 25-08-8222, 43532534 )";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>