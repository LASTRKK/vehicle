<?php 
include('insert.php');  
session_start();  
if($_SESSION["loggedIn"] == 0)
    header("location: index.php");
  $user_ = $_SESSION["user"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Return  Vehicle</title>
</head>
<body>
  <body style="background-color:powderblue;">
  <link rel = "stylesheet" href= "BootStrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="navbar3.css">
<script src="BootStrap/js/jQuery.min.js"></script>
<script src="BootStrap/js/bootstrap.min.js"></script>

<nav class="navbar navbar-default"  data-offset-top="200">

    <div class="navbar-header">
    <img src="http://localhost/rkk/c3.jpeg" alt="omc" width="200" height="50">
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="li"><a  href="index1.php">Home</a></li>
      <li><a id = "li" href="front.php" >Entry Vehicle</a></li>
      <li><a id = "li" href="returnvehicle.php" >Returned Vehicle</a></li>
      <li><a id = "li" href="logout.php" >Logout</a></li> 
    </ul>
  </div>
</nav>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h2>Return Vehicle</h2>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  
                  <th scope="col">Vehicle Reg. No</th>
                  <th scope="col">Vehicle Inspection</th>
                  <th scope="col">Date</th>
                  <th scope="col">Time</th>
                  <th scope="col">Remark</th>
                </tr>
              </thead>
              <tbody>
                <?php include 'retrieve-data1.php'; ?>
                <?php if ($result->num_rows > 0): ?>
                <?php while($array=mysqli_fetch_row($result)): ?>
                <tr>
                    <th scope="row"><?php echo $array[0];?></th>
                   
                    <td><?php echo $array[2];?></td>
                    <td><?php echo $array[3];?></td>
                    <td><?php echo $array[4];?></td>
                    <td><?php echo $array[5];?></td>
                    <td><?php echo $array[6];?></td>
                </tr>
                <?php endwhile; ?>
                <?php else: ?>
                <tr>
                   <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>
                <?php endif; ?>
                <?php mysqli_free_result($result); ?>
              </tbody>
            </table>
        </div>
    </div>        
</div>
</body>
</html>