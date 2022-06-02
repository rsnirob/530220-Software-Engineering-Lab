<?php

$con=mysqli_connect('localhost','root','','enrollment') or die(mysqli_error($scon));

if($con)
{
	$sql="Update entry SET fname='Sakiba' where id=9";
	
	if(mysqli_query($con,$sql))
	{
		echo"Updated";
	}
	else
	{
		echo "Not Inserted";
	}
}
?>
