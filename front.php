<?php 
include('insert.php');
include('footerForAll.php');  
session_start();  
if($_SESSION["loggedIn"] == 0)
    header("location: index.php");
  $user_ = $_SESSION["user"];

?>
<html>
<head>
  <title>Entry Vehicle</title>
</head>
<style>
<body{
  background-color: grey;
}
table,th,td{
  border: 2px solid black;
  width: 1100px;
  background-color: lightgreen;
}
</style>
</head>
<body>
  <body style="background-color:powderblue;">
   <link rel = "stylesheet" href= "BootStrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="navbar3.css">
<script src="BootStrap/js/jQuery.min.js"></script>
<script src="BootStrap/js/bootstrap.min.js"></script>
<style>
html {
  position: relative;
  min-height: 100%;
}body {
  /* Margin bottom by footer height */
  margin-bottom: 40px;
}#head{
    text-decoration:underline;
}input:required:invalid, input:focus:invalid, input:invalid {
    border-radius: 5px;
    border:soild 1px;

}input:required:valid, input:valid {
    border-radius: 5px;
}input[type='number'] {
    -moz-appearance:textfield;
}input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
}.affix {
      top:0;
      width: 100%;
      z-index: 9999 !important;
  }
 </style>
   <nav class="navbar navbar-expand-sm bg-danger navbar-dark">

    <div class="navbar-header">
    <img src="http://localhost/rkk/c3.jpeg" alt="omc" width="200" height="50">
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="li"><a  href="index2.php">Home</a></li>
      <li><a id = "li" href="front.php" >Entry Vehicle</a></li>
      <li><a id = "li" href="returnvehicle.php" >Returned Vehicle</a></li>
      <li><a id = "li" href="contac.php" >Contact</a></li>
      <li><a id = "li" href="logout.php" >Logout</a></li> 
    </ul>
  </div>
</nav>

  <center>
    <div class="container">
      <form action="" method="POST">
        <input type="text" name="vehiclenumber" class="btn" placeholder="Enter vehicle reg. no." />
        <input type="submit" name="search" class="btn"  value="SEARCH">
         <a href="en..php"  button type="button" class="btn"><b>DATE</button></a></b>

        
      </form>
      <table>
        <tr>
          
          <th>Driver Name</th>
          <th>Vehicle Reg. No</th>
          <th>Checkbox</th>
          <th>Date</th>
          <th>Time In</th>
          <th>Authority</th>
          <th>Wheeler</th>
        </tr> <br>
        <?php
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,'insert');
        if (isset($_POST['search']))
         {
          $vehiclenumber = $_POST['vehiclenumber'];
          $query="SELECT * FROM form where vehiclenumber='$vehiclenumber' ";
          $query_run = mysqli_query($connection,$query);

          while($row = mysqli_fetch_array($query_run))
           {
            ?>
            <tr>
            
              <td> <?php echo $row['name']; ?> </td>
              <td><?php echo $row['vehiclenumber']; ?> </td>
              <td><?php echo $row['checkbox']; ?> </td>
              <td><?php echo $row['created_at']; ?> </td>
              <td><?php echo $row['timein']; ?> </td>
              <td><?php echo $row['Authority']; ?> </td>
              <td><?php echo $row['Wheeler']; ?> </td>

            </tr>

            <?php
          }
        }
?>
    </div>
    
  </center>
  
</body>
</table>
</html>