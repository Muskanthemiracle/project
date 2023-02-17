<?php
session_start();
include("header1.php");
include("dbconnection.php");
$results = mysql_query("SELECT * FROM accounts ");
?><hr>
<div id="templatemo_main"><span class="main_top"></span> 
     	
<div id="templatemo_content">
	  <h2 align="center" ><font color="red"><u>ACCOUNT SUMMARY</u></font></h2>
     		 
	   <form style="background-image:url('bbc10.jpg');background-size:cover;background-repeat:no-repeat" method="POST">
<font color="black"> <b><font size="5">Account No : </font></b></font><input type="text" name="accn"><br><br>
	   <input type="submit" name="submi"value="SUBMIT" style="width:5.5em;height:3em ; background-color:blue;color:white;size=50">
	   <br>
<center><table width="616" border="1" background="ima.jpeg">
     		   <tr>
     		     <th  width=300 >ACCOUNT TYPE</th>
     		     <th width=300 >ACCOUNT NUMBER</th>
				 <th  width=300  >FIRST NAME</th>
     		     <th width=300 >CUSTOMER ID</th>
     		   <th  width=300>A/C BALANCE</th>
			        		   <th scope="col" width=300 >ACCOUNT STATUS</th>
							   <th scope="col" width=300 >UNCLEAR BALANCE</th>
     		     <th scope="col" width=300>ACCOUNT OPEN DATE</th>

   		     </tr></center> 
            
     		 
	   <?php
	   include('dbconnection.php');
	   if(isset($_POST['submi'])){
	   $b=$_POST['accn'];
	   $a="select * from account where accno='$b'";
	   $c=mysql_query($a);
	   while($row=mysql_fetch_array($c))
	   {
		   $n=  $row['acctype'];
		 $e=  $row['accno'];
		 $fi=$row['firstname'];
	   $d=  $row['customerid'];
		 $f=  $row['accbalance'];
		$g=	 $row['accstatus'];
		 $ub=  $row['unclearbalance'];
		$aty=	 $row['accopendate'];
			  
	   echo"<center><table width=615 border=2 background=ima.jpeg><font color=red><tr><td width=300>$n</td><td width=300>$e</td><td width=300 >$fi</td><td  width=300>$d</td><td width=300>$f</td><td width=300>$g</td><td width=300>$ub</td><td width=300>$aty</td></font></tr></table></center>";
	   
	   }
	   }
	   ?></table> <p>&nbsp;</p>
       <p>&nbsp;</p>
        <div class="cleaner_h30"></div>
  <div class="cleaner_h60"></div>
</div><!-- end of content -->
            
            <div id="templatemo_sidebar">
             
              <div class="cleaner_h40"></div>
                
                <h2>&nbsp;</h2>
            
            </div>
                
		<div class="cleaner"></div>
  </div>     <!-- end of main -->
    <div id="templatemo_main_bottom"></div><!-- end of main -->
    
    <?php
	include("footer.php");
	?>