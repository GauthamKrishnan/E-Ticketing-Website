<!DOCTYPE html>
<html>
<head>
	<title>Ticket</title>
<style type="text/css">
*
{
	font-family: Century Gothic;
	color: darkred;
	
}
a:link 
{
   color: darkblue;
   background-color: transparent;
   text-decoration: none;
}
a:visited 
{
    color: darkblue;
    background-color: transparent;
    text-decoration: none;
}
a:hover 
{
    color: red;
    background-color: transparent;
    text-decoration: underline;
}
a:active 
{
    color: yellow;
    background-color: transparent;
    text-decoration: underline;
}
.logo
{
	position: absolute;
	left:655px;
	top: 160px;
	font-size: 150%;
	color: darkred;
}
.logout
{
	position: absolute;
  	left:1280px;
  	top:10px;
  	font-size: 125%;
}
.head
{
	position: absolute;
  	left:685px;
  	top:280px;
  	font-size: 125%;
  	color:darkblue;
  	text-decoration: underline;
}
.name
{
	position: absolute;
  	left:350px;
  	top:230px;	
}
.fid
{
	position: absolute;
  	left:900px;
  	top:230px;	
}
.source
{
	position: absolute;
  	left:350px;
  	top:270px;	
}
.dest
{
	position: absolute;
  	left:370px;
  	top:325px;	
}
.stime
{
	position: absolute;
  	left:900px;
  	top:270px;	
}
.etime
{
	position: absolute;
  	left:900px;
  	top:325px;	
}
.border
{
		height:265px;
		width: 800px;
		margin-top: 150px;
		margin-left: 300px;
		border-style: dotted solid;
		border-width: 5px;
		border-color: darkred;
		border-radius: 25px;
		background-color: gold;
}
.marq
{
	position: absolute;
	left:570px;
	top:550px;
	font-size: 150%;
	background-color: gold;
	color: darkred;
}
.img1
{
	position: absolute;
	left:40px;
	top:200px;
}
.img2
{
	position: absolute;
	left:1130px;
	top:200px;
}
</style>
</head>
<body>
<div class="logo">
WHIZZ AIR
</div>
<div class="img1">
	<img src="f19.png">
</div>
<div class="img2">
	<img src="f20.ico" height="200" width="200">
</div>
<?php
	error_reporting(0);
$user = 'root';
$pass = '';
$db = 'airline';
$p = $_POST["password"];
//$u = $_POST["username"];
$con = mysqli_connect('localhost', $user, $pass, $db);
if($con)
	//echo 'connection successful';
	$i=$_GET['i'];
	$t=$_GET['t'];
	$u=$_GET['u'];
	$sql="SELECT * from flight where fid1='$i'";
	$sql1="SELECT * from identity where Username='$u'";
	echo '<div class="border">';
	echo '<div class="head">';
	echo "E-TKT";
	echo '</div>';
	if($result = mysqli_query($con, $sql1))
	{
		while($row = mysqli_fetch_array($result))
		{
			echo '<div class="name">';
			echo "Name: ".$row['fname1']." ".$row['lname1']."<br>";
			echo '</div>';	
		}
		
	}
	if($result = mysqli_query($con, $sql))
	{	
    	if(mysqli_num_rows($result) > 0)
    	{
        	
                while($row = mysqli_fetch_array($result))
        		{
                	echo '<div class="fid">';
                		echo "Flight No : ";
                		echo $row['fid1'];
                	echo '</div>';
					echo '<div class="source">';                
                		echo "<br>From : ";
                		echo  $row['source1'];
                	echo '</div>';
                	echo '<div class="dest">';
                		echo "<br>To : ";
                		echo $row['dest1'];
                	echo '</div>';
                	echo '<div class="stime">';
                		echo "<br>Departure : ";
                		echo $row['stime1'];
                	echo '</div>';
                	echo '<div class="etime">';
                		echo "<br>Arrival : ";
                		echo $row['etime1'];
                	echo '</div>';
                	
           		}
        		
        		mysqli_free_result($result);
        }
        else echo "No records matching your query were found.";
    	echo '</div>';
        
} 
	else echo "ERROR: Could not execute $sql. " . mysqli_error($con);
	
	$sql="UPDATE flight SET tno1=tno1-'$t'";
	if(mysqli_query($con, $sql))
 	{
 		//echo "Record updated successfully";
 	}
 	else
 	{
 		echo "Could not update record: ". mysqli_error($con);
 	}

?>
</div>
<div class="logout">
	<a href="http://localhost:81/home.php" target="_parent" >Logout</a>
</div>
<div class="marq">
<marquee>Sit back,Relax and Enjoy!</marquee>
</div>
</body>
</html>