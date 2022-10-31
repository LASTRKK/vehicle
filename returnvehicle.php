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
	<title>Return Vehicle</title>
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
</nav>
	<center>
		<div class="container">
			<form action="" method="POST">
				<input type="text" name="email" class="btn" placeholder="Enter vehicle reg. no." />
				<input type="submit" name="search" class="btn" value="SEARCH">

				
			</form>
			<table>
				<tr>
					
					<th>Driver Name</th>
					<th>Vehicle Reg. No</th>
					<th>Checkbox</th>
					<th>Date</th>
					<th>Time Out</th>
					<th>Remark</th>
					<th>Authority</th>
				</tr> <br>
				<?php
				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,'insert');
				if (isset($_POST['search']))
				 {
					$email = $_POST['email'];
					$query="SELECT * FROM form1 where email='$email' ";
					$query_run = mysqli_query($connection,$query);

					while($row = mysqli_fetch_array($query_run))
					 {
						?>
						<tr>
						
							<td> <?php echo $row['name']; ?> </td>
							<td><?php echo $row['email']; ?> </td>
							<td><?php echo $row['checkbox']; ?> </td>
							<td><?php echo $row['date']; ?> </td>
							<td><?php echo $row['timeout']; ?> </td>
							<td><?php echo $row['remark']; ?> </td>
							<td><?php echo $row['Authority']; ?> </td>


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