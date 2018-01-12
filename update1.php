<?php
	$user = 'root';
	$pass = 'federer11';
	$db = 'stu';
	$con = mysqli_connect('localhost', $user, $pass, $db);
	if($con)
	{
		$i=$_POST["id1"];
		$m=$_POST["mark1"];
		$sql = "UPDATE student set mark='$m' where id='$i'";
		if(mysqli_query($con, $sql))
 		{
		echo "Record updated successfully";
 		}
 		else
 		{
 		echo "Could not update record: ". mysqli_error($con);
 		}
	}
?>