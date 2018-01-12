<!DOCTYPE html>
<html>
<head>
    <title></title>
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
    left:620px;
    top:30px;
    font-size: 150%;
    color: gold;
    text-decoration: underline;
}   
.table1
{
    position: absolute;
    left:45px;
    top:50px;
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
    color: yellow;
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
    <span style="background-color: black">Return Flights</span>
</div> 
<?php
error_reporting(0);
$user = 'root';
$pass = '';
$db = 'airline';
$con = mysqli_connect('localhost', $user, $pass, $db);
$i=$_GET['i'];
$s=$_GET['s'];
$d=$_GET['d'];
$t=$_GET['t'];
$d1=$_GET['d1'];
$st = $_GET['st'];
$et = $_GET['et'];
$u = $_GET['u'];
if($con)
{

    $sql1 = "SELECT * FROM flight where source1='$d' and dest1='$s' and tno1>'$t' and date1='$d1'";
        if($result1 = mysqli_query($con, $sql1))
        {
                if(mysqli_num_rows($result1) > 0)
                {
                    
                    echo '<div class="table1">';
                    echo '<table class="tabper">';
                    echo "<tr>";
                    echo "<th>Flight No.</th>";
                    echo '<span style="background-color: gold">'."<th>Source</th>".'</span>';
                    echo "<th>Destination</th>";
                    echo "<th>Start Time</th>";
                    echo "<th>End Time</th>";
                    echo "<th>No. Of Seats</th>";
                    echo "<th>Select Flight</th>";
                    echo "</tr>";
                
                    while($row = mysqli_fetch_array($result1))
                    {
                    
                        echo '<tr class="space">';
                        echo "<td>" . '<span style="background-color: gold">'.$row['fid1'] .'</span>'. "</td>";
                        echo "<td>" . '<span style="background-color: gold">'.$row['source1'] .'</span>'. "</td>";
                        echo "<td>" . '<span style="background-color: gold">'.$row['dest1'] .'</span>'. "</td>";
                        echo "<td>" . '<span style="background-color: gold">'.$row['stime1'] .'</span>'. "</td>";
                        echo "<td>" . '<span style="background-color: gold">'.$row['etime1'] .'</span>'. "</td>";
                        echo "<td>" . '<span style="background-color: gold">'.$row['tno1'] .'</span>'. "</td>";
                        $i1=$row['fid1'];
                        $s1=$row['source1'];
                        $d3=$row['dest1'];
                        $t1=$row['tno1'];
                        $d2=$row['date1'];
                        $st1=$row['stime1'];
                        $et1=$row['etime1'];
                        echo "<td><a href='http://localhost:81/final2.php?u=$u&i=$i&s=$s&d=$d&d1=$d1&st=$st&et=$et&i1=$i1&s1=$s1&d3=$d3&t1=$t1&d2=$d2&st1=$st1&et1=$et1'>Generate Tickets</a></td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    echo '</div>';

                mysqli_free_result($result1);
                }
        }
        else echo "ERROR: Could not execute $sql1. " . mysqli_error($con);

}
?>
</body>
</html>
		