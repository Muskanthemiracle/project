<?php
include("header1.php");
include("dbconnection.php");
$s="SELECT * FROM branch ";
$q=mysql_query($s);
while($row=mysql_fetch_array($q))
{
	echo $row['ifsccode'];
}
?>