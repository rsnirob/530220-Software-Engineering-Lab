<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];

echo "First Name: $fname<br>";
echo "Last Name: $lname<br>";
echo "DoB: $dob<br>";

	$host="localhost";
	$username="root";
	$password="";
	$dbname="admission";
	$conn = new mysqli($host, $username, $password, $dbname);
	$mysql=mysqli_connect($host, $username, $password, $dbname);
	mysql_select_db(admission);
	
	if ($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	}
	else
	{
		echo "Connected successfully";
	}
	$sql=INSERT INTO Stu (fname, lname, dob) VALUES ($fname, $lname, $dob);
	mysql_connect();
	mysql_select_db();
	mysql_query();
	
	if($conn->query(sql==TRUE)
	{
		echo "New record created successfully";
	}
	else
	{
		echo "Error" .sql."<br>".$conn->error;
	}
	$conn->close();
	
?>
