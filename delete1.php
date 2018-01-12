<?php
	$user = 'root';
	$pass = 'federer11';
	$db = 'stu';
	$con = mysqli_connect('localhost', $user, $pass, $db);
	if($con)
	{
		$i=$_POST["id1"];
		$sql = "DELETE from student where id='$i'";
		if(mysqli_query($con, $sql))
 		{
		echo "Record deleted successfully";
 		}
 		else
 		{
 		echo "Could not delete record: ". mysqli_error($con);
 		}
	}
?>