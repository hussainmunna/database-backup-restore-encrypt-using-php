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
   $sql = "LOAD DATA INFILE '$backup_file' INTO TABLE $table_name";
   
   mysql_select_db('chat');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not load data : ' . mysql_error());
   }
   echo "Loaded  data successfully\n";
   
   mysql_close($conn);
?>