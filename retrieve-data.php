<?php
include 'mydb.php';
$query="select * from form"; // Fetch all the data from the table customers

$result=mysqli_query($dbcon,$query);
?>