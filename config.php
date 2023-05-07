<?php  
/* Database Connection */  
$sDbHost = 'localhost' ;  
$sDbName = 'flight_booking_db' ;  
$sDbUser = 'root';  
$sDbPud = '';  
$ Conn = mysql_connect ($sDbHost, $sDbUser, $sDbPwd);  
mysql_select_db ($sDbName, $Conn);  
?>  