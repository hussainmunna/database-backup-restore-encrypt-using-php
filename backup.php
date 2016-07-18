<?php
$servername = "localhost";
$username = "root";
$password = "";
$db='chat';
   
   $conn = mysql_connect($servername, $username, $password);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
	
   $table_name = "chat";
   $backup_file  = "c://xampp/htdocs/img/chat.sql";
   $sql = "SELECT * INTO OUTFILE '$backup_file' FROM $table_name";
   
	mysql_select_db('chat');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not take data backup: ' . mysql_error());
   }
   
   echo "Backedup  data successfully\n";
   
   mysql_close($conn);
?>