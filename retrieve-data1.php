<?php
include 'mydb.php';
$query="select * from form1"; // Fetch all the data from the table customers
$result=mysqli_query($dbcon,$query);
?>