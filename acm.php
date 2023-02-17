
<?php
include("header1.php");
echo "<hr>";
echo"<br><br>";
echo"<center><font size=5 color=red><u><b>Account Basic Details</u></b></font></center>";?>
<div background="uuu.jpg">
<?php echo"<br><br>";
include("dbconnection.php");
$s="SELECT * FROM accountmaster ";
$q=mysql_query($s);
echo "<center><table border=4 background=uuu.jpg><tr><th>Account Type</th><th width=50>Prefix </th><th width=123>Minimum Balance</th>
<th width=70>Interest</th></tr></table></center>";

while($row=mysql_fetch_array($q))
{
	echo "<form background=ima.jpeg>";
	$sl=$row['acctype'];
	$pa=$row['prefix'];
	$lid=$row['minbalance'];
	$acn=$row['interest'];
echo "<center><table border=3 background=ima.jpeg background-repeat=no repeat background size=cover color=white><tr><td width=95>$sl</td><td width=50>$pa</td><td width=123>$lid</td><td width=70>$acn</td></tr></font></center></table>";
echo"</form>";
}
echo"<br><br><br>";
include("footer.php");

?>
</div>