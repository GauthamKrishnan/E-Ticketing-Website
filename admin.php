<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
<style>
*
{
	font-family: Century Gothic;
}
a:link 
{
   color: red;
   background-color: transparent;
   text-decoration: none;
}
a:visited 
{
    color: red;
    background-color: transparent;
    text-decoration: none;
}
a:hover 
{
    color: gold;
    background-color: transparent;
    text-decoration: underline;
}
a:active 
{
    color: yellow;
    background-color: transparent;
    text-decoration: underline;
}
body
{
	background-color: blue;
	background-image: url("f10.jpg");
	background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 1400px 800px;
    background-position: fixed;
}
p
{
	color: gold; 
}
.addflight
{
	position: absolute;
  	left:100px;
  	top:50px;
  	font-size: 150%;
  	text-decoration: underline;
  	color: gold;
}
.impflight
{
	position: absolute;
  	left:580px;
  	top:50px;
  	font-size: 150%;
  	text-decoration: underline;
  	color: gold;	
}
.decflight
{
	position: absolute;
  	left:1000px;
  	top:50px;
  	font-size: 150%;	
  	text-decoration: underline;
  	color: gold;
}
.fid1
{
	position: absolute;
  	left:120px;
  	top:100px;
}
.source1
{
	position: absolute;
  	left:120px;
  	top:200px;	
}
.dest1
{
	position: absolute;
  	left:120px;
  	top:300px;
}
.not1
{
	position: absolute;
  	left:120px;
  	top:400px;
}
.stime1
{
	position: absolute;
  	left:120px;
  	top:500px;
}
.etime1
{
	position: absolute;
  	left:120px;
  	top:600px;
}
.date1
{
	position: absolute;
  	left:120px;
  	top:700px;
}
.addb
{
	position: absolute;
  	left:130px;
  	top:850px;	
}
.fid2
{
	position: absolute;
  	left:1020px;
  	top:100px;
}
.date2
{
	position: absolute;
  	left:1020px;
  	top:200px;
}
.delb
{
	position: absolute;
  	left:1040px;
  	top:350px;
}
.fid3
{
	position: absolute;
  	left:600px;
  	top:100px;
}
.not3
{
	position: absolute;
  	left:600px;
  	top:200px;
}
.stime3
{
	position: absolute;
  	left:600px;
  	top:300px;
}
.etime3
{
	position: absolute;
  	left:600px;
  	top:400px;
}
.upb
{
	position: absolute;
  	left:620px;
  	top:550px;
}
.logout
{
	position: absolute;
  	left:1240px;
  	top:10px;
  	font-size: 150%	
}
</style>
</head>
<body>

<div class="addflight">Increase Service</div>
	<form method="post" action="http://localhost:81/admin.php" name="login"><br><br><br>
			<div class="fid1">
				<p><span style="background-color: black">Flight ID:</span> </p> <input type="text" name="fid" align="right|bottom">
			</div><br><br>
			<div class="source1">
				<p><span style="background-color: black">Source:</span> </p><input type="text" list="cities" name="source"/>
			
				<datalist id="cities">
			  	<option value="Delhi">Delhi</option>
				<option value="Kolkata">Kolkata</option>
				<option value="Mumbai">Mumbai</option>
				<option value="Chennai">Chennai</option>
				<option value="Bengaluru">Bengaluru</option>
				<option value="Hyderabad">Hyderabad</option>
			</datalist>
			</div><br><br>
			<div class="dest1">
				<p><span style="background-color: black">Destination:</span> </p> <input type="text" list="cities" name="dest"/>
				
				<datalist id="cities">
			  	<option value="Delhi">Delhi</option>
				<option value="Kolkata">Kolkata</option>
				<option value="Mumbai">Mumbai</option>
				<option value="Chennai">Chennai</option>
				<option value="Bengaluru">Bengaluru</option>
				<option value="Hyderabad">Hyderabad</option>
			</datalist>
			</div><br><br>
			<div class="not1">
				<p><span style="background-color: black">No. of Tickets:</span> </p><input type="number" name="tno" align="right">
			</div><br><br>
			<div class="stime1">
				<p><span style="background-color: black">Start Time:</span> </p><input type="text" name="stime" align="right">
			</div><br><br>
			<div class="etime1">
				<p><span style="background-color: black">End Time:</span> </p><input type="text" name="etime" align="right">
			</div><br><br>
			<div class="date1">
				<p><span style="background-color: black">Date:</span> </p><input type="date" name="date">
			</div><br><br>
			<div class="addb">
				<button type="submit" name="Submit1" value="Submit">Add Flight</button>
			</div>
			
<div class="decflight">Decrease Service</div>
			<div class="fid2">
				<p><span style="background-color: black">Flight ID:</span> </p> <input type="text" name="fid2" align="right|bottom">
			</div><br><br>
			<div class="date2">
				<p><span style="background-color: black">Date:</span></p> <input type="date" name="date2">
			</div><br><br>
			<div class="delb">
				<button type="submit" name="Submit2" value="Submit">Delete Flight</button>
			</div>
			
<div class="impflight">Improve Service</div>
			<div class="fid3">
				<p><span style="background-color: black">Flight ID:</span></p> <input type="text" name="fid3" align="right|bottom">
			</div><br><br>
			<div class="not3">
				<p><span style="background-color: black">No. of Tickets:</span></p> <input type="number" name="tno3" align="right">
				</div><br><br>
			<div class="stime3">
				<p><span style="background-color: black">New Start Time:</span></p> <input type="text" name="stime3" align="right">
				</div><br><br>
			<div class="etime3">
				<p><span style="background-color: black">New End Time:</span></p> <input type="text" name="etime3" align="right">
			</div><br><br>
			<div class="upb">
				<button type="submit" name="Submit3" value="Submit">Update Flight</button>
			</div>

<?php
error_reporting(0);
$user = 'root';
$pass = '';
$db = 'airline';

$con = mysqli_connect('localhost', $user, $pass, $db);
if($con)
  //echo 'connection successful';
	if(isset($_POST['Submit1']))
	{
		$sql = "INSERT INTO flight (fid1,source1,dest1,stime1,etime1,tno1,date1) VALUES ('".$_POST["fid"]."','".$_POST["source"]."','".$_POST["dest"]."','".$_POST["stime"]."','".$_POST["etime"]."','".$_POST["tno"]."','".$_POST["date"]."')";
		echo '<script language="javascript">';
		echo 'alert("New Flight Added!")';
		echo '</script>';
 
 		if(mysqli_query($con, $sql))
 		{
 		//echo "Record inserted successfully";
 		}
 		else
 		{
 		echo "Could not insert record: ". mysqli_error($con);
 		}
	}

	if(isset($_POST["Submit2"]))
	{
	 	$id=$_POST['fid2'];
 		$sql = "SELECT * FROM flight where fid1='$id'";
 		if($result=mysqli_query($con, $sql))
 		{
 			if(mysqli_num_rows($result)==0)
 			{
 				echo '<script language="javascript">';
				echo 'alert("No flight found")';
				echo '</script>';
 			}
 		}

 		$sql = "DELETE FROM flight WHERE fid1='$id'";
 		echo '<script language="javascript">';
 		echo 'alert("Flight Deleted")';
 		echo '</script>';

		if(mysqli_query($con, $sql))
		{
 		//"Record deleted successfully";
		}
		else
		{
 		echo "Could not delete record: ". mysqli_error($con);
		}
	}

	if(isset($_POST['Submit3']))
	{
		$sql2="SELECT * FROM flight WHERE fid1 = '".$_POST["fid3"]."'";
		if($result=mysqli_query($con, $sql2))
 		{
 			if(mysqli_num_rows($result)==0)
 			{
 				echo '<script language="javascript">';
				echo 'alert("No flight found")';
				echo '</script>';
 			}
 			else
 			{
				$sql="UPDATE flight SET tno1= '".$_POST["tno3"]."', stime1='".$_POST["stime3"]."', etime1='".$_POST["etime3"]."' WHERE fid1='".$_POST["fid3"]."'";
				echo '<script language="javascript">';
 				echo 'alert("Flight Updated")';
 				echo '</script>';
 		
 				if(mysqli_query($con, $sql))
 				{
 			
 			//echo "Record updated successfully";
 				}
 				else
 				{
 				echo "Could not update record: ". mysqli_error($con);
 				} 				
 			}
 		}

	} 
?>
<div class="logout">
<a href="http://localhost:81/home.php" target="_parent" >Logout</a>
</div>
</body>
</html>