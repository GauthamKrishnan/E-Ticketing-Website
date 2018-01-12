<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
<script type="text/javascript">
		function checkIfEmpty()
		{
			var x = document.forms["login"]["username"].value;
    		var flag=0;

    		if (x == "") 
        	{alert("Please enter username");flag=1;}
    			x = document.forms["login"]["password"].value;
    		if (x == "") 
        	{alert("Please enter password");flag=1;}
   				if(flag==1)
   					return false;
		}
</script>
<style>
*
{
	font-family: Century Gothic;
}
body
{
	background-color: blue;
	background-image: url("f14.jpg");
	background-size: 1400px 800px;
}
.logo
{
	position: absolute;
	left:550px;
	top: 20px;
	font-size: 250%;
	color: yellow;
}
.pass
{
	color:red;
	position: absolute;
  	left:250px;
  	top:180px;
  	font-size: 200%;	
}
.input1
{
	color:yellow;
	position: absolute;
  	left:250px;
  	top:280px;
}
.input2
{
	color:yellow;
	position: absolute;
  	left:255px;
  	top:360px;
}
.sub1
{
	position: absolute;
  	left:350px;
  	top:420px;
}
.adm
{
	color:red;
	position: absolute;
  	left:800px;
  	top:180px;	
  	font-size: 200%;
}
.input3
{
	color:yellow;
	position: absolute;
  	left:800px;
  	top:280px;
}
.input4
{
	color:yellow;
	position: absolute;
  	left:806px;
  	top:360px;
}
.sub2
{
	position: absolute;
  	left:920px;
  	top:420px;
}
hr
{
	position: absolute;
  	left: 0;
  	top:75px;
  	width: 100%;
  	margin: 0;
}	
</style>
</head>
<body>
	<div class="logo">
		WHIZZ AIR
	</div>
	<hr>
	<div class="pass">
		<span style="background-color: black">Passenger Login</span>
	</div>
		<form method="post" action="http://localhost:81/login.php" name="login" onsubmit="return checkIfEmpty()"><br><br><br>
			<div class="input1" align="center">
				<span style="background-color: darkblue">Username:</span> <input type="text" name="username1" align="right|bottom">
			</div><br><br>
			<div class="input2" align="center">
				<span style="background-color: darkblue">Password:</span> <input type="password" name="password1" align="right">
			</div><br><br>
			<div class="sub1" align="center">
				<button type="submit" name="Submit1" value="Submit">Submit</button>
			</div>
		</form>

		<div class="adm">
			<span style="background-color: black">Administrator Login</span>
		</div>
		<form method="post" action="http://localhost:81/login.php" name="admin" onsubmit="return checkIfEmpty()"><br><br><br>
			<div class="input3" align="center">
				<span style="background-color: darkblue">Username:</span> <input type="text" name="username2" align="right|bottom">
			</div><br><br>
			<div class="input4" align="center">
				<span style="background-color: darkblue">Password:</span> <input type="password" name="password2" align="right">
			</div><br><br>
			<div class="sub2" align="center">
				<button type="submit" name="Submit2" value="Submit">Submit</button>			
			</div>
		</form>
	</div>
</body>
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
	$p = $_POST["password1"];
	$u = $_POST["username1"];
	$sql = mysqli_query($con,"SELECT * FROM identity WHERE Username = '".$u."' and Password = '".$p."'") or die(mysqli_error($con));
	$result = mysqli_fetch_row($sql);
 
 	if(is_null($u)==false)
 		{
 			if($result )
 			{
 				echo '<script language="javascript">';
				echo 'alert("Welcome")';
				echo '</script>';
				header("Location:http://localhost:81/detail.php?u=".$u); 
			}
 			else
 			{
				echo '<script language="javascript">';
				echo 'alert("Wrong credentials")';
				echo '</script>'. mysqli_error($con);
 			}
		}
}

if(isset($_POST['Submit2']))
{		
	$q = $_POST["password2"];
	$t = $_POST["username2"];
	$sql1 = mysqli_query($con,"SELECT * FROM identity WHERE Username = '".$t."' and Password = '".$q."'") or die(mysqli_error($con));
	$result1 = mysqli_fetch_row($sql1);
 
 	if(is_null($t)==false)
 	{
 		if($result1 )
 		{
 			echo '<script language="javascript">';
			echo 'alert("Welcome")';
			echo '</script>';
			header("Location:http://localhost:81/admin.php?t=".$t); 
		}
 		else
 		{
			echo '<script language="javascript">';
			echo 'alert("Wrong credentials")';
			echo '</script>'. mysqli_error($con);
 		}
	}
}
?>
</html>