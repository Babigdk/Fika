<?php  

 $host="localhost"; 

 $databasename="fika"; 

 $user="root"; 

 $pass=""; 
 $conn=mysql_connect($host,$user,$pass,$databasename);    
 if($conn) 
 { 
 $db_selected = mysql_select_db($databasename, $conn); 
 if (!$db_selected) { 
     die ('Can\'t use foo : ' . mysql_error()); 
 } 
 } 
 else 
 { 
     die('Not connected : ' . mysql_error()); 
 } 
 ?> 
