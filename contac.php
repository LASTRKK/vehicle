<?php 
include('insert.php');  
session_start();  
if($_SESSION["loggedIn"] == 0)
    header("location: index.php");
  $user_ = $_SESSION["user"];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
</head>
<body>
	<body>
  <body style="background-color:powderblue;">
   <link rel = "stylesheet" href= "BootStrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="navbar3.css">
<script src="BootStrap/js/jQuery.min.js"></script>
<script src="BootStrap/js/bootstrap.min.js"></script>
<nav class="navbar navbar-expand-sm bg-danger navbar-dark">

    <div class="navbar-header">
    <img src="http://localhost/rkk/c3.jpeg" alt="omc" width="200" height="50">
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="li"><a  href="index1.php">Home</a></li>
      <li><a id = "li" href="front.php" >Entry Vehicle</a></li>
      <li><a id = "li" href="returnvehicle.php" >Returned Vehicle</a></li>
      <li><a id = "li" href="contac.php" >Contact</a></li>
      <li><a id = "li" href="logout.php" >Logout</a></li> 
    </ul>
  </div>
</nav>

</body>
</html>