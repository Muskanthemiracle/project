<?php
session_start();
include("header1.php");
include("dbconnection.php");
?><hr>
<form method="POST">
<table><tr>
<td>Acoount No:<INPUT TYPE="TEXT" name="accno"></td></tr>

<tr><td><input type="submit" name="submit" value="submit"></td></tr>
</table>

<div id="templatemo_main"><span class="main_top"></span> 
     	
<div id="templatemo_content">
	  <h2 align="center">ACCOUNTS SUMMARY</h2>
     		 <table width="616" border="1">
     		   <tr>
     		     <th scope="col">ACCOUNT TYPE</th>
     		     <th scope="col">NAME</th>
     		     <th scope="col">ACCOUNT NUMBER</th>
     		     <th scope="col">BRANCH</th>
     		     
     		     <th scope="col">A/C BALANCE</th>
   		     </tr> 
           
     		 </table>  <?php
	include('dbconnection.php');
	$a=$_POST['accno'];
	$b="select * from account where accno='$a'";
	$c=mysql_query($b);
	if(isset($_POST['submit']))
	{
	while($row=mysql_fetch_array($c))
	{
	echo $row['accno'];
	}}
	?><p>&nbsp;</p>
       <p>&nbsp;</p>
        
        <div class="cleaner_h30"></div>
  <div class="cleaner_h60"></div>
</div><!-- end of content -->
            
            <div id="templatemo_sidebar">
              <?php
	   include("myaccountssidebar.php");
	   ?>
              <div class="cleaner_h40"></div>
                
                <h2>&nbsp;</h2>
            
            </div>
                
		<div class="cleaner"></div>
  </div>     <!-- end of main -->
    <div id="templatemo_main_bottom"></div><!-- end of main -->
    
    <?php
	include("footer.php");
	?>
	<?php
	include('dbconnection.php');
	$a=$_POST['accno'];
	$b="select * from account where accno='$a'";
	$c=mysql_query($b);
	if(isset($_POST['submit']))
	{
	while($row=mysql_fetch_array($c))
	{
	echo"your acc bal is".$row["accbalance"];
	}}
	?>