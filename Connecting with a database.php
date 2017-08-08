<?php
/**
 *This code makes connection with data base and make a table
 *
 */
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "sample2";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

// Sql query to create table
$sql = "CREATE TABLE Employe(
id INT(6) AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
dept VARCHAR(30) NOT NULL)";

if ($conn->query($sql) === TRUE) {
    echo "Table Employe created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


if ($conn->query($sql) === TRUE)
{
	echo"Table Updated successfully";

}
else
{
	echo "error". $connect_error->error;
}
$conn->close();

?>