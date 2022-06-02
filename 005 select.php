<?php
$con=mysqli_connect('localhost','root','','enrollment') or die(mysqli_error($scon));


if($con){
	$sql="select * from `entry`";
	$result=mysqli_query($con,$sql) or die(mysqli_error($con));
	
	while($row=mysqli_fetch_assoc($result))
	{
		echo $row['id'].'........'.$row['fname'].'........'.$row['lname'].'......'.$row['dob'];
		echo"<br>";
	}
}
else
{
	echo"Not inserted";
}


?>
