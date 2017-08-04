<?php

$servername = "localhost";
$username = "root";
$password = "123";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error)
{
	die("Connection failed". $conn->connect_error);
}
echo "connection established";

$db = ("CREATE DATABASE sample2");
if ($conn->query($db) === TRUE)
{
	echo"Data base created succesfully";
}
else
{
	echo"Error".$conn->$connect_error;
}

?>


