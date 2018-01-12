<!DOCTYPE html>
<html>
<head>
	<title>hello</title>
</head>
<body>
<h1>hi</h1>
<?php
error_reporting(0);
$user = 'root';
$pass = '';
$db = 'airline';
$con = mysqli_connect('localhost', $user, $pass, $db);
if($con)
{
	$sql = "SELECT * FROM flight where source1='".$_POST["source"]."' and dest1='".$_POST["dest"]."' and tno1>'".$_POST["tno"]."' and date1='".$_POST["date"]."'";
	if($result = mysqli_query($con, $sql))
	{
    	if(mysqli_num_rows($result) > 0)
    	{
        		echo '<div class="table1">';
        		echo '<table class="tabper">';
			  	echo "<tr>";
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
					echo "<td>" . '<span style="background-color: gold">'.$row['source1'] .'</span>'. "</td>";
               	 	echo "<td>" . '<span style="background-color: gold">'.$row['dest1'] .'</span>'. "</td>";
                	echo "<td>" . '<span style="background-color: gold">'.$row['stime1'] .'</span>'. "</td>";
                	echo "<td>" . '<span style="background-color: gold">'.$row['etime1'] .'</span>'. "</td>";
                	echo "<td>" . '<span style="background-color: gold">'.$row['tno1'] .'</span>'. "</td>";
                	$i=$row['fid1'];
                	$c=$_POST["tno"];
    
				 	echo "</tr>";
				 	
        		}
        		

        		// Free result set
     		mysqli_free_result($result);

     			
    	} 
    //else echo "No records matching your query were found.";
	} 
	else echo "ERROR: Could not execute $sql. " . mysqli_error($con);

</body>
</html>