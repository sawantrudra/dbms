<?php

  
 $db_connect = mysqli_connect("localhost","root","","dbms");
 
 if ( !$db_connect ) {
  die("Connection failed : " . mysqli_connect_error());
 }
 
?>