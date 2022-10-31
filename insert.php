<?php
$server ="localhost" ;
$username="root";
$password="";
$dbname="insert";


$conn=mysqli_connect($server , $username , $password , $dbname) ;

if (isset($_POST['publish'])) {
        # Publish-button was clicked
   

	
	if(!empty($_POST['name']) && !empty($_POST['email'])   && !empty($_POST['checkbox'])){

		$name = $_POST['name'];
		$email = $_POST['email'];
		date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
$timein = date("H:i:s");



$date = date("Y/m/d");
		
		$checkbox=$_POST["checkbox"];
$checkbox=implode(",",$checkbox);
//echo "$checkbox<br>";

		
		$query = "insert into form(name,email,timein,date,checkbox) values('$name','$email','$timein','$date','$checkbox')" ;
		

		$run = mysqli_query($conn,$query) or die(mysqli_error());

		if($run){
			echo "<script>alert('Complaint details updated successfully');</script>";
        
		}
		else{

			echo "form not submitted";
			}		

		
		}
		else{
			echo "all fields required";
		}
	}
	 elseif (isset($_POST['save'])) {
        # Save-button was clicked
        if(!empty($_POST['name']) && !empty($_POST['email'])   && !empty($_POST['checkbox'])){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$timeout = date("H:i:s");
		$date = date("Y/m/d");
		$checkbox=$_POST["checkbox"];
$checkbox=implode(",",$checkbox);
//echo "$checkbox<br>";

		
		$query = "insert into form1(name,email,timeout,date,checkbox) values('$name','$email','$timeout','$date','$checkbox')" ;

		$run = mysqli_query($conn,$query) or die(mysqli_error());

		if($run){
			echo "<script>alert('Complaint details updated successfully');</script>";
        
		}
		else{

			echo "form not submitted";
			}		

		
		}
		else{
			echo "all fields required";
		}
	}
	 elseif (isset($_POST['save'])) {
        # Save-button was clicked
    }



	?>
