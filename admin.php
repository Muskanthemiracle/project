<?php
include("header1.php");

?>

<html>
<body >
<form method="POST" style="background-image:url('Bbc10.jpg'); background-size:cover;background-repeat:no-repeat;height:390;width:1400">
<font color="blue"><center><h1><font color=maroon><u>ADMIN LOGIN</u></font></h1><br><br>
<b><font color="navy">USERNAME:-</font><input type="text" name="us"><br><p></p><br>
<font color="navy">PASSWORD:-</font><input type="password" name="pass"><br>
<br><p></p></b>
<input type="submit" name="sub" value=""style=" background-image:url('download.jpg');width:10em;height:3em ; size=50 ;background-size:cover""></form></center>

</body>
</html>
<?php
session_start();
include('dbconnection.php');

if(isset($_POST['sub']))
{
	$n=$_POST['us'];
$m=$_POST["pass"];
$p="select * from admin_login where username='$n' and password='$m'";
$r=mysql_query($p);
	 

if($row=mysql_fetch_array($r))
{
	$_SESSION['na']=$n;
header('location:admin_login.php');
}
echo"not found";
}
?>
<?php
echo"<br><br><br><br><br><br><br><br>";
include('footer.php');?>