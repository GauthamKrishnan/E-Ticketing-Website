<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
<style type="text/css">
*
{
	font-family: Century Gothic;
}
body
{
	background-color:green;
	background-image: url("f18.jpg");
	background-size: 1366px 670px;
	background-repeat: no-repeat;
    background-attachment: fixed;
}
.head
{
	position: absolute;
  	left:580px;
  	top:80px;
  	font-size: 150%;
  	color: gold;
  	text-decoration: underline;
}	
.src
{
	position: absolute;
  	left:50px;
  	top:150px;
  	color: orange;
}
.dest
{
	position: absolute;
  	left:350px;
  	top:150px;
  	color: orange;
}
.not
{
	position: absolute;
  	left:700px;
  	top:150px;
  	color: orange;
}
.date
{
	position: absolute;
  	left:1100px;
  	top:150px;
  	color: orange;
}
.rad1
{
	position: absolute;
  	left:550px;
  	top:220px;
  	color: darkred;	
}
.rad2
{
	position: absolute;
  	left:650px;
  	top:220px;
  	color: darkred;	
}
.sub
{
	position: absolute;
  	left:600px;
  	top:250px;
}
.table1
{
	position: absolute;
	left:25px;
	top:250px;
	color: darkblue;
}
.tabper
{
	table-layout: fixed;
    border-spacing: 80px;
}
tr.space>td
{
	padding-bottom: 0.5em;
	padding-right: 0.1em;
}
a:link 
{
   color: darkblue;
   background-color: transparent;
   text-decoration: underline;
}
a:visited 
{
    color: darkblue;
    background-color: transparent;
    text-decoration: underline;
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
.disp
{
	position: absolute;
  	left:1100px;
  	top:270px;
}
</style>
</head>
<body>
	<div class="head">
		<span style="background-color: black">Travel Details</span>
	 </div>
		<form method="post" name="myform">
			<br><br><br><br>
			<div class="src" align="center" ><span style="background-color: black">Source:</span> <input type="text" list="cities" name="source"/></div>
			<div class="dest" align="center"><span style="background-color: black">Destination:</span> <input type="text" list="cities" name="dest"/></div>
			<datalist id="cities">
			  	<option value="Delhi">Delhi</option>
				<option value="Kolkata">Kolkata</option>
				<option value="Mumbai">Mumbai</option>
				<option value="Chennai">Chennai</option>
				<option value="Bengaluru">Bengaluru</option>
				<option value="Hyderabad">Hyderabad</option>
			</datalist>
			<div class="not" align="center"><span style="background-color: black">No. Of Tickets:</span>
				<input type="number" name="tno" ><br><br>
			</div>
			<div class="date" align="center">
				<span style="background-color: black">Date:</span> <input type="date" name="date">
			</div>
			
			<div class="sub" align="center">
				<button type="submit" align="center" name="onward" id="submit" value="Taxi">Book Ticket</button>
			</div>
		</form>
	</div>
</body>
<?php
error_reporting(0);
$user = 'root';
$pass = '';
$db = 'airline';
$p = $_POST["password"];
$un = $_POST["username"];
$u=$_GET['u'];
$q=$_POST['tno'];
$con = mysqli_connect('localhost', $user, $pass, $db);
if($con)
{
	//echo 'connection successful';
	if(isset($_POST['onward']))
	{
		if($q<0)
		{
			echo '<script language="javascript">';
			echo 'alert("Cant enter negative tickets")';
			echo '</script>';
		}
		else if ($q>12) 
		{
			echo '<script language="javascript">';
			echo 'alert("Exceeded number of tickets for single transaction")';
			echo '</script>';	
		}

		else
		{
		$sql = "SELECT * FROM flight where source1='".$_POST["source"]."' and dest1='".$_POST["dest"]."' and tno1>'".$_POST["tno"]."' and date1='".$_POST["date"]."'";
		$i=$row['fid1'];

		if($result = mysqli_query($con, $sql))
		{
    		if(mysqli_num_rows($result) == 0)
    		{
    			echo '<script language="javascript">';
				echo 'alert("No flight found")';
				echo '</script>';
    		}
    		else
    		{
        		echo '<div class="table1">';
        		echo '<table class="tabper">';
			  	echo "<tr>";
			  	echo "<th>Flight Number</th>";
                echo '<span style="background-color: gold">'."<th>Source</th>".'</span>';
                echo "<th>Destination</th>";
                echo "<th>Start Time</th>";
                echo "<th>End Time</th>";
                echo "<th>No. Of Seats</th>";
                echo "<th>Select Flight</th>";
                echo "</tr>";
        		
        		while($row = mysqli_fetch_array($result))
        		{
            		
            		echo '<tr class="space">';
            		echo "<td>" . '<span style="background-color: gold">'.$row['fid1'] .'</span>'. "</td>";
					echo "<td>" . '<span style="background-color: gold">'.$row['source1'] .'</span>'. "</td>";
               	 	echo "<td>" . '<span style="background-color: gold">'.$row['dest1'] .'</span>'. "</td>";
                	echo "<td>" . '<span style="background-color: gold">'.$row['stime1'] .'</span>'. "</td>";
                	echo "<td>" . '<span style="background-color: gold">'.$row['etime1'] .'</span>'. "</td>";
                	echo "<td>" . '<span style="background-color: gold">'.$row['tno1'] .'</span>'. "</td>";
                		$i=$row['fid1'];
                		$s = $_POST["source"];
						$d = $_POST["dest"];
						$t = $_POST["tno"];
						$d1 = $_POST["date"];
						$st = $row["stime1"];
						$et = $row["etime1"];
					echo "<td><a href='http://localhost:81/final.php?i=$i&t=$t&u=$u'>Generate Ticket</a></td>";
                	echo "<td><a href='http://localhost:81/return.php?i=$i&u=$u&s=$s&d=$d&t=$t&d1=$d1&st=$st&et=$et'>Book Return Flight</a></td>";
                	$i=$row['fid1'];
                	echo "</tr>";
				 }
        			// Free result set
				 mysqli_free_result($result);
			} 
    //else echo "No records matching your query were found.";

		} 
		else echo "ERROR: Could not execute $sql. " . mysqli_error($con);
	}
  }
   	$s = $_POST["source"];
	$d = $_POST["dest"];
	$t = $_POST["tno"];
	$d1 = $_POST["date"];
}
?>
</html>