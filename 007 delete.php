<?php

$con=mysqli_connect('localhost','root','','enrollment') or die(mysqli_error($con));

if($con)
{
	$sql=" DELETE FROM entry WHERE id=10";
	
	
	if(mysqli_query($con,sql))
	{
		echo "deleted";
	}
}
	else
	{
		echo "Not Deleteed";
	}
	
?>
