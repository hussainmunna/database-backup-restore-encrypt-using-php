<?php
 
/* Load the Zend file encrypting filter */
require_once("c://xampp/htdocs/img/chat.sql");
 
/*  Set various encryption options. */
$options = array(
                // Encryption type - Openssl or Mcrypt
                'adapter' => 'mcrypt', 
                // Initialization vector
                'vector' => '236587hgtyujkirtfgty5678', 
                // Encryption algorithm
                'algorithm' => 'rijndael-192', 
                // Encryption key
                'key' => 'KFJGKDK$$##^FFS345678FG2' 
                );
 
/* Initialize the library and pass the options */
$encrypt = new Zend_Filter_File_Encrypt($options);
 
/* 
   Set output filename, where the encrypted file will be stored.
   If we omit this, the encrypted file will overwrite the original file.
*/
$encrypt->setFilename('"c://xampp/htdocs/img/chat1.sql"');
 
/* Now encrypt a file */
$encrypt->filter('test.pdf');
 
?>