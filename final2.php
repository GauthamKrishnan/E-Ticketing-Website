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
	left:635px;
	top: 20px;
	font-size: 200%;
	color: silver;
	text-decoration: underline;

}
.logout
{
	position: absolute;
  	left:1280px;
  	top:10px;
  	font-size: 125%;
}
.logo1
{
	position: absolute;
  	left:630px;
  	top:60px;
  	font-size: 150%;	
}
.head1
{
	position: absolute;
  	left:655px;
  	top:160px;
  	font-size: 125%;
  	color:darkblue;
}
.name1
{
	position: absolute;
  	left:350px;
  	top:125px;	
}
.fid1
{
	position: absolute;
  	left:850px;
  	top:130px;	
}
.source1
{
	position: absolute;
  	left:350px;
  	top:145px;	
}
.dest1
{
	position: absolute;
  	left:370px;
  	top:190px;	
}
.stime1
{
	position: absolute;
  	left:850px;
  	top:150px;	
}
.etime1
{
	position: absolute;
  	left:850px;
  	top:190px;	
}
.logo2
{
	position: absolute;
  	left:630px;
  	top:340px;
  	font-size: 150%;	
}
.head2
{
	position: absolute;
  	left:655px;
  	top:440px;
  	font-size: 125%;
  	color:darkblue;
}
.name2
{
	position: absolute;
  	left:350px;
  	top:405px;	
}
.fid2
{
	position: absolute;
  	left:850px;
  	top:410px;	
}
.source2
{
	position: absolute;
  	left:350px;
  	top:425px;	
}
.dest2
{
	position: absolute;
  	left:370px;
  	top:470px;	
}
.stime2
{
	position: absolute;
  	left:850px;
  	top:430px;	
}
.etime2
{
	position: absolute;
  	left:850px;
  	top:470px;	
}
.border1
{
		height:220px;
		width: 750px;
		margin-top: 50px;
		margin-left: 300px;
		border-style: dotted solid;
		border-width: 5px;
		border-color: darkred;
		border-radius: 25px;
		background-color: gold;
}
.border2
{
		height:220px;
		width: 750px;
		margin-top: -15px;
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
	left:550px;
	top:600px;
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
	
	<div class="logo1">WHIZZ AIR</div>
	<div class="logo2">WHIZZ AIR</div>
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
$con = mysqli_connect('localhost', $user, $pass, $db);
if($con)
{
	$i=$_GET['i'];
	$s=$_GET['s'];
	$d=$_GET['d'];
	$t=$_GET['t'];
	$d1=$_GET['d1'];
	$st = $_GET['st'];
	$et = $_GET['et'];
	$i1=$_GET['i1'];
	$s1=$_GET['s1'];
	$d3=$_GET['d3'];
	$t1=$_GET['t1'];
	$d2=$_GET['d2'];
	$st1 = $_GET['st1'];
	$et1 = $_GET['et1'];
	$u = $_GET['u'];

	$sql1="SELECT * from identity where Username='$u'";

	echo '<div class="border1">';
	echo '<div class="head1">';
	echo "E-TKT<br>";
	echo '</div>';
	if($result = mysqli_query($con, $sql1))
	{
		while($row = mysqli_fetch_array($result))
		{
			echo '<div class="name1">';
			echo "Name: ".$row['fname1']." ".$row['lname1']."<br>";
			echo '</div>';
		}
	}

	echo '<div class="fid1">';
	echo "Flight No : ";
    echo $i;
    echo '</div>';

	echo '<div class="source1">';
	echo "<br>From : ";
    echo  $s;
    echo '</div>';

	echo '<div class="dest1">';
	echo "<br>To : ";
    echo $d;
    echo '</div>';

	echo '<div class="stime1">';
	echo "<br>Departure : ";
    echo $st;
    echo '</div>';

	echo '<div class="etime1">';
	echo "<br>Arrival : ";
    echo $et;
    echo '</div>';

    echo '</div>';
	echo "<br><br><br>";
	echo '<div class="border2">';

    echo '<div class="head2">';
    echo "E-TKT<br>";
    echo '</div>';
    
    if($result = mysqli_query($con, $sql1))
	{
		while($row = mysqli_fetch_array($result))
		{
			echo '<div class="name2">';
			echo "Name: ".$row['fname1']." ".$row['lname1']."<br>";
			echo '</div>';
		}
	}

    echo '<div class="fid2">';
    echo "Flight No : ";
    echo $i1;
    echo '</div>';

	echo '<div class="source2">';
	echo "<br>From : ";
    echo  $s1;
    echo '</div>';

	echo '<div class="dest2">';
	echo "<br>To : ";
    echo $d3;
    echo '</div>';

	echo '<div class="stime2">';
	echo "<br>Departure : ";
    echo $st1;
    echo '</div>';

	echo '<div class="etime2">';
	echo "<br>Arrival : ";
    echo $et1;
    echo '</div>';

    echo '</div>';
  }
?>
<div class="logout">
	<a href="http://localhost:81/home.php" target="_parent" >Logout</a>
</div>
<div class="marq">
<marquee>Sit back,Relax and Enjoy!</marquee>
</body>
</html>