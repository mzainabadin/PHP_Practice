<?php
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
echo "Connected successfully". "<br>";


$sql = "INSERT INTO Employe(firstname,lastname,email) VALUES('sample fname','sample lname', 'abc@xyc')";


if ($conn->query($sql) === TRUE)
{
	echo"Table Updated successfully". "<br>";

}
else
{
	echo "error". $connect_error->error;
}

$sql2 = "SELECT id,firstname,lastname FROM Employe";
$result2 = $conn->query($sql2);

if($result2->num_rows > 0)
{
	while($row = $result2->fetch_assoc())
	{
	echo $row["id"]."  ".$row["firstname"] ."  ".$row["lastname"]. "<br>";
	}
}

$sql3 = "DELETE FROM Employe WHERE id=2";
if($conn->query($sql3)=== TRUE)
{
	echo"Delete querty executed". "<br>";
}
else
{
	echo "Error wile deleting ". $conn->connect_error;
}

$sql4 = "SELECT id,firstname,lastname FROM Employe";
$result4 = $conn->query($sql4);

if($result4->num_rows > 0)
{
	while($row = $result4->fetch_assoc())
	{
	echo $row["id"]."  ".$row["firstname"] ."  ".$row["lastname"]. "<br>";
	}
}

$sql5 ="UPDATE Employe SET lastname = 'updated name' WHERE id = 1";	
if($conn->query($sql5)=== TRUE)
{
	echo"Update querty executed". "<br>";
}
else
{
	echo "Error wile Updating ". $conn->connect_error;
}

$conn->close();

?>