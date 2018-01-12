<?php
	$user = 'root';
	$pass = 'federer11';
	$db = 'stu';
	$con = mysqli_connect('localhost', $user, $pass, $db);
	if($con)
	{
		$sql = "INSERT INTO student (id,name,mark) VALUES ('".$_POST["id1"]."','".$_POST["name1"]."','".$_POST["mark1"]."')";
		if(mysqli_query($con, $sql))
 		{
		echo "Record inserted successfully";
 		}
 		else
 		{
 		echo "Could not insert record: ". mysqli_error($con);
 		}
	}
?>