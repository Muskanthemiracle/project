<?php
include('header1.php');?>
<form style="background-image:url('Bb3.jpg');"><?php

include("dbconnection.php");
echo"<hr>";?>
<form style="background-color:url('ima.jpeg');">
 <?php
 session_start();
$p= $_SESSION['na'];
echo "welcome <font color=black >$p</font>";
$q="select* from admin_login where username='$p'";
$a=mysql_query($q);
while($s=mysql_fetch_array($a))
{ 
echo"<center><b><u><font size=5 color=red>Admin Home Page<u></font></b></center>";
echo "<ul><li><a href=emp.php>View Employee Details</a> </li></ul>
<ul><li><a href=acc.php>View Customer Details</a> </li></ul>
<ul><li><a href=loantype.php>View Loan Type DetailS</a> </li></ul>
<ul><li><a href=loanpay.php>View Loan Account Detail</a> </li></ul>
<ul><li><a href=br.php>View Branch Detail</a> </li></ul>
<ul><li><a href=acm.php>Accountmaster</a> </li></ul>
<ul><li><a href=mail.php>View Mail Detail</a> </li></ul>
<ul><li><a href=registerpay.php>View Registered Payee Details</a> </li></ul>";
	
}
session_destroy();
include("footer.php");
?>
</form>
