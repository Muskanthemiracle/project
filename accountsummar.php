<?php
session_start();
include("header1.php");
include("dbconnection.php");
$results = mysql_query("SELECT * FROM accounts ");
?><html><body style="background-image:url('uuu.jpg')">

	  
     		 
	   <form style="background-image:url('Bbc10.jpg');background-size:cover;background-repeat:no-repeat" method="POST">
	   <h2 align="center" ><font color="maroon"><u>ACCOUNT SUMMARY</u></font></h2>
<font color="black"> <b><font size="5">Account No : </font></b></font><input type="text" name="accn"><br><br>
	   <input type="submit" name="submi"value="" style=" background-image:url('download.png');width:8em;height:3em ; size=50 ;background-size:cover" ">
	   <br>
<center><table width="616" border="1" background="ima.jpeg">
     		   <tr>
     		     <th scope="col" >ACCOUNT TYPE</th>
     		     <th scope="col">ACCOUNT NUMBER</th>
     		     <th scope="col">CUSTOMER ID</th>
     		   <th scope="col">A/C BALANCE</th>
			        		   <th scope="col">ACCOUNT STATUS</th>

   		     </tr></center> 
            
     		 
	   <?php
	   include('dbconnection.php');
	   if(isset($_POST['submi'])){
	   $b=$_POST['accn'];
	   $a="select * from account where accno='$b'";
	   $c=mysql_query($a);
	   if($row=mysql_fetch_array($c))
	   {
		   $n=  $row['acctype'];
		 $e=  $row['accno'];
	   $d=  $row['customerid'];
		 $f=  $row['accbalance'];
		$g=	 $row['accstatus'];
			  
	   echo"<center><table width=615 border=2 background=ima.jpeg><font color=red><tr><td width=110>$n</td><td width=138>$e</td><td  width=107>$d</td><td width=108>$f</td><td width=125>$g</td></font></tr></table></center>";
	  echo"<br>";
	  echo"<font color=red>Please note your account number for future transaction or take the print out of this page...</font>";
	  echo"<br><br>";
	    echo" <input type=button value=Print style=width:5.5em;height:3em ;background-image:red;size=50 onClick=window.print()>";
	   }
	   else{
		   echo"No record found";
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
    </form>
	
    <?php
	
	include("footer.php");
	?>
	</body>
	</html>