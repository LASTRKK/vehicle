<?php
    $server ="localhost" ;
$username="root";
$password="";
$dbname="insert";


$dbcon=mysqli_connect($server , $username , $password , $dbname) ;

      if(!$dbcon){
          die('Could not Connect MySql Server:' .mysql_error());
      }
?>