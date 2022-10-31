<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device=width, initial-scale=1.0">
	<title>date</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card mt -5">
					<div class="card-body">
						<form action=""method="GET">
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
<div class="col-md-4"><br>
<div class="form-group">
<label></label>	
<button type="submit" class="btn btn-primary">Filter</button>						
						
						
					</div>
					</div>
						
					
				</div>
				</form>
			</div>
		</div>
		<div class="card">
			<div class="card-body">
				<?php
				$con = mysqli_connect("localhost","root","","");
if (isset($_GET['from_date']) && isset($_GET['to_date']))
 {
	$from_date = $_GET['from_date'];
	$to_date = $_GET['to_date'];
				
$query="SELECT * FROM form where date BETWEEN '$from_date' AND '$to_date'";
					$query_run = mysqli_query($con,$query);

if(mysqli_num_rows($query_run) > 0)
{
foreach($query_run as $row)	
		{
			
			?>
			<tr>
<td><?= $row['name']; ?></td>
<td><?= $row['email']; ?></td>
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
	</div>

</body>
</html>