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
  </div></nav></div>
</nav>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card mt-5">
					<div class="card-header">
						
					</div>
					<div class="card-body">
						<form action="" method="GET">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label>From Date</label>
										<input type="date" name="from_date" class="form-control">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>To Date</label>
										<input type="date" name="to_date" class="form-control">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>click To Filter</label><br>
										<button type="submit" class="btn btn-primary">Filter</button>
									</div>
								</div>


								
							</div>
						</form>
					</div>
				</div>
				<div class="card mt-4">
					<div class="card-body">

						<table class="table table-border">
							<thead>
								<tr>
		  <th>Driver Name</th>
          <th>Vehicle Reg. No</th>
          <th>Checkbox</th>
          <th>Date</th>
          <th>Time In</th>
          <th>Authority</th>
          <th>Wheeler</th>
        </tr> <br>
		</thead>
		<tbody>
       
          
          
						<?php
						$con = mysqli_connect("localhost","root","","insert");


						if (isset($_GET['from_date']) && isset($_GET['to_date'])) 
						{
							$from_date =$_GET['from_date'];
							$to_date=$_GET['to_date'];


							$query = "SELECT * FROM form WHERE created_at BETWEEN '$from_date' AND '$to_date'";
							$query_run = mysqli_query($con,$query);

							if (mysqli_num_rows($query_run) > 0) 
							{
								foreach($query_run as $row)
								{
									//echo
									?>
									<tr>
										<td><?=$row['name']; ?></td>
										<td><?=$row['vehiclenumber']; ?></td>
										<td><?=$row['checkbox']; ?></td>
										<td><?=$row['created_at']; ?></td>
										<td><?=$row['timein']; ?></td>
										<td><?=$row['Authority']; ?></td>
										<td><?=$row['Wheeler']; ?></td>
									</tr>
									<?php
							}
						}
						else
						{
								echo "No Record Found";
						}
							}
						
						?>

					</div>
				</div>
			</div>
		</div>
	</div>
	
</tbody></body>
</html>