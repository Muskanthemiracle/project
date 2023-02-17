<?php
session_start();
include("header1.php");
include("dbconnection.php");
$results = mysql_query("SELECT * FROM accounts where customerid='98683'");

?><hr>
<div id="templatemo_main"><span class="main_top"></span>
  <div id="templatemo_content">
     		 <h2>&nbsp;</h2>
     		 <table width="560" border="1">
     		   <tr>
     		     <th colspan="2" scope="col">ACCOUNT DETAIL - </th>
   		     </tr>
     		   <tr>
     		     <td width="282" height="38">ACCOUNT NUMBER</td>
     		     <td width="262">&nbsp;</td>
   		     </tr>
     		   <tr>
     		     <td height="36">ACCOUNT TYPE</td>
     		     <td>&nbsp; </td>
   		     </tr>
     		   <tr>
     		     <td height="37">ACCOUNT STATUS</td>
     		     <td>&nbsp;</td>
   		     </tr>
     		   <tr>
     		     <td height="38">PRIMARY ACCOUNT</td>
     		     <td>&nbsp;</td>
   		     </tr>
     		   <tr>
     		     <td height="34">ACCOUNT HOLDER</td>
     		     <td>&nbsp;</td>
   		     </tr>
     		   <tr>
     		     <td height="34">ACCOUNT OPEN DATE</td>
     		     <td>&nbsp;</td>
   		     </tr>
     		   <tr>
     		     <td height="39">ACCOUNT BALANCE</td>
     		     <td>&nbsp;</td>
   		     </tr>
   		   </table>
     	
        
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