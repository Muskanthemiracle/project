<?php
include("header1.php");
include("dbconnection.php");
$s="SELECT * FROM `add` ";
$f=mysql_query($s);
if($q=mysql_fetch_array($f))
{
echo"<table border=7><tr><td>AccNo.</td><td>Name</td><td>LastName</td>
<td>Fname</td><td>DOB</td><td>ContNo.</td><td>Email</td>
<td>Address</td><td>PhoneNo.</td><td>Occupation</td><td>Gender</td><td>MaritalStatus</td><td>Acctype</td>
</tr></table>";
echo"<table border=7><tr><td>$q[accno]</td><td>$q[name]</td><td>$q[lastname]</td><td>$q[fname]</td><td>$q[]</td><td>$q[]</td><td>$q[]</td>
<td>$q[]</td><td>$q[]</td><td>$q[]</td><td>$q[acctype]</td>
<td></td><td></td>
</tr></table>";echo"<br>";
}

?>