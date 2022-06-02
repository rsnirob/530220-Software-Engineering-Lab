<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];


echo "$fname<br>";
echo "$lname<br>";
echo "$dob<br>";

$con= mysqli_connect('localhost','root','','enrollment') or die(mysqli_error($con));
if($con)
	
	{	
		$sql= "INSERT INTO entry (id,fname,lname,dob) VALUES (NULL,'$fname','$lname','$dob')";
		$qry= mysqli_query($con,$sql) or die(mysqli_error ($con));
		if($qry)
		{echo "INSERTED";
		}
		else
		{
			echo "NOT INSERTED";
		}
	}
?>
