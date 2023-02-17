
<?php
include("header1.php");
echo"<hr>";
include("dbconnection.php");
$s="SELECT * FROM account";
$q=mysql_query($s);
echo "<b><u><h2><font color=red><center>Accounts Detail</font></h2></center></b></u>";
echo "<BR>";

echo "<table border=4 background=uuu.jpg background-repeat=no repeat ;background-size=cover><tr><th width=110>Account Number</th><th width=110 >First Name</th><th width=60>Customer ID</th><th width=80>Account Status</th>
<th width=60>Primary Account</th><th width=120>Account Open Date </th><th width=100>Account Type</th>
<th width=110 >Account Balance</th><th width=80>Unclear Balance</th><th width=80>Accured Interest</th></tr></table>";
while($row=mysql_fetch_array($q))
{
	$sl=$row['accno'];
	$pa=$row['firstname'];
	$lid=$row['customerid'];
	$acn=$row['accstatus'];
	$aty=$row['primaryaccount'];
	$bn=$row['accopendate'];
	$ifs=$row['acctype'];
	$ab=$row['accbalance'];
	$ub=$row['unclearbalance'];
	$ai=$row['accuredinterest'];
	echo "<table border=3 background=ima.jpeg background-repeat=no repeat ;background-size=cover><tr><td width=80>$sl</td><td width=110 >$pa</td><td width=70 >$lid</td><td width=80>$acn</td><td width=60 >$aty</td>
<td width=120>$bn</td><td width=100 >$ifs</td><td width=110>$ab</td><td width=80>$ub</td><td width=80>$ai</td></tr></table>";

}
?>