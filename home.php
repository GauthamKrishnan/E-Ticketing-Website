<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
<style>
body,html
{
	 height: 100%;
     margin: 0;
}
.bg
{
	background-image: url("jet.jpeg");
	height: 100%; 
	background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
a:link 
{
   color: green;
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
	font-family: Century Gothic;
	position: absolute;
	left:610px;
	top: 20px;
	font-size: 250%;
	color: gold;
}
.nuser
{
	position: absolute;
	left: 200px;
	top: 100px;
	font-size: 200%;
	font-family: Century Gothic;
}
.nuser1
{
	position: absolute;
	left: 210px;
	top: 150px;
	font-size: 150%;
	font-family: Century Gothic;
	color:darkred;
}
.login
{
	position: absolute;
	left: 1050px;
	top: 100px;
	font-size: 200%;	
	font-family: Century Gothic;
}
.login1
{
	position: absolute;
	left: 970px;
	top: 150px;
	font-size: 150%;	
	font-family: Century Gothic;
	color:darkred;
}
</style>
</head>
<body>
<div class="bg"></div>
<div class="logo">
WHIZZ AIR
</div>
<div class="nuser">
<a href="http://localhost:81/reg.php" target="_parent" >New Passenger</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
<div class="nuser1">
	(Lets Get Started!)
</div>
<div class="login">
<a href="http://localhost:81/login.php" target="_parent">Login</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
<div class="login1">
	(You know the routine!)
</div>
</body>
</html>