<?php

include("header.php");
include("dbconnection.php");
$dts = date("Y-m-d h:i:s");
mysql_query("UPDATE customers SET lastlogin='$dts' ");
$sqlq = mysql_query("select * from transaction where paymentstat='Pending'");
$mailreq = mysql_query("select * from mail");
?>
<div id="templatemo_main"><span class="main_top"></span> 
     	
<div id="templatemo_content">
     		 <h2>Alerts and messages</h2>
     		 <table width="548" border="0">
     		   <tr>
     		     <th colspan="2" scope="col">Alerts</th>
   		       </tr>
     		   <tr>
     		     <td width="293">Customer Name</td>
     		     <td width="245"></td>
   		     </tr>
     		   <tr>
     		     <td>Branch code</td>
     		     <td>&nbsp;</td>
   		     </tr>
     		   <tr>
     		     <td>User logged on</td>
     		     <td> </td>
   		     </tr>
     		   <tr>
     		     <td>Pending payments</td>
     		     <td></td>
   		     </tr>
     		   <tr>
     		     <td>Unread mails</td>
     		     <td>&nbsp;</td>
   		     </tr>
   		   </table>
     		 <p>&nbsp;</p>
     <p>&nbsp;</p>
        
        <div class="cleaner_h30"></div>
  <div class="cleaner_h60"></div>
</div><!-- end of content -->
            
            <div id="templatemo_sidebar">
            
            <?php
	   include("myaccountssidebar.php");
	   ?>
              <div class="cleaner_h40"></div>
    </div>
                
		<div class="cleaner"></div>
     </div>     <!-- end of main -->
    <div id="templatemo_main_bottom"></div><!-- end of main -->
    
    <?php
	include("footer.php");
	?>