<html>
<head>
<title>Passenger Registration</title>
<style>
*
{
  font-family: Century Gothic;
}
.head
{
  position: absolute;
  left:500px;
  top:20px;
  color: yellow;
  text-decoration: underline;
  font-size: 200%
}
p
{
 color: darkred;
 font-size:25px;
}
.bg
{
  background-color: green;
  background-image: url("f11.jpg");
  background-position: fixed;
  background-size: 1400px 800px;
  background-repeat: no-repeat;
  height: 100%; 
}
.fname
{
  position: absolute;
  left:200px;
  top:100px;
}
.lname
{
  position: absolute;
  left:850px;
  top:100px; 
}
.phno
{
  position: absolute;
  left:225px;
  top:200px; 
}
.eid
{
  position: absolute;
  left:910px;
  top:200px;  
}
.usname
{
  position: absolute;
  left:100px;
  top:300px; 
}
.pass
{
  position: absolute;
  left:520px;
  top:300px;
}
.cpass
{
  position: absolute;
  left:920px;
  top:300px;
}
.terms
{
  position: absolute;
  left:400px;
  top:400px;
}
.but
{
  position: absolute;
  left:620px;
  top:500px;
}
.port
{
  position: absolute;
  left:600px;
  top:550px; 
}
a:link 
{
   color: yellow;
   background-color: transparent;
   text-decoration: none;
}
a:visited 
{
    color: white;
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
</style>
</head>
<body>
<div class="bg">
<script type="text/javascript">
function f1() {
    var x = document.forms["myForm"]["fname"].value;
    var flag=0;
    var f=0;var f1=0;
    if (x == "") 
        {alert("First name missing");flag=1;f=1;}
    x = document.forms["myForm"]["lname"].value;
    if (x == "") 
        {alert("Last name missing");flag=1;f1=1;}
    x = document.forms["myForm"]["phno"].value;
    if (x == "") 
        {alert("Phone number missing");flag=1;}  
    x = document.forms["myForm"]["mail"].value;
    if (x == "") 
        {alert("Email ID missing");flag=1;}
    x = document.forms["myForm"]["uname"].value;
    if (x == "") 
        {alert("Username missing");flag=1;} 
    x = document.forms["myForm"]["pwd"].value;
    if (x == "") 
        {alert("Password missing");flag=1;}  
    x = document.forms["myForm"]["pwd1"].value;
    if (x == "") 
        {alert("Please confirm password");flag=1;}
    var y=document.forms["myForm"]["pwd"].value;
    if(x!=y)
    {alert("Passwords don't match");flag=1;}
   x = document.getElementById("tac").checked;
     if(x!=true)
    {alert("Please agree to the terms and conditions");flag=1;}
   var letters = /^[A-Za-z]+$/;
   if(f==0)
   {
    if(document.forms["myForm"]["fname"].value.match(letters)){}
    else
    {
        alert("First name should only have letters");
          flag=1;
    }
   } 
  if(f1==0)
  {
      if(document.forms["myForm"]["lname"].value.match(letters)){}
      else
      {
          alert("Last name should only have letters");
          flag=1;
      }
  }
    if(flag==1)
    return false;
    else alert("Successfully registered! ");
} 
</script>

<form name="myForm" onsubmit="return f1()" method="post">
<center>
<div class="head"><center>Passenger Registration</center></div>
<br><br><br>
<div class="fname">
<p><span style="background-color: black">First Name:</span><input type="text" name="fname" ></p>
<br>
</div>
<div class="lname">
<p><span style="background-color: black">Last Name:</span><input type="text" name="lname" ></p>
<br>
</div>
<div class="phno">
<p><span style="background-color: black">Contact:</span><input type="text" name="phno" ></p>
<br>
</div>
<div class="eid">
<p><span style="background-color: black">Email:</span><input type="email" name="mail" ></p>
<br>
</div>
<div class="usname">
<p><span style="background-color: black">Username:</span><input type="text" name="uname" ></p>
<br>
</div>
<div class="pass">
<p><span style="background-color: black">Password:</span><input type="password" name="pwd" ></p>
<br>
</div>
<div class="cpass">
<p><span style="background-color: black">Confirm Password:</span><input type="password" name="pwd1" ></p>
<br>
</div>
<div class="terms">
<p><input type="checkbox" id="tac" ><span style="background-color: black">I agree to the</span> <a href="tac.html"><span style="background-color: black">Terms and Conditions</span></a></p>
<br>
</div>
<div class="but">
<button type="submit" value="Submit">Submit</button>
<button type="reset" value="Reset">Reset</button>
</div>
</center></div>
</form>
<br>
<div class="port">
<a href="http://localhost:81/login.php"><span style="background-color: black">PROCEED TO BOOKING</span></a>
</div>
<?php
error_reporting(0);
$user = 'root';
$pass = '';
$db = 'airline';

$con = mysqli_connect('localhost', $user, $pass, $db);
if($con)
  //echo 'connection successful';

$sql = "INSERT INTO identity (fname1,lname1,phno1,mail1,Username,Password) VALUES ('".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["phno"]."','".$_POST["mail"]."','".$_POST["uname"]."','".$_POST["pwd"]."')";
 
 if(mysqli_query($con, $sql))
 {
 //echo "Record inserted successfully";
 }
 else
 {
 echo "Could not insert record: ". mysqli_error($con);
 }
?>
</div>
</body>
</html>