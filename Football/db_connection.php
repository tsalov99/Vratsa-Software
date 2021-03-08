<?php

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "tisho";
 $dbpass = "415514";
 $db = "football";


 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>