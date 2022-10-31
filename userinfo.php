<?php 

$con = mysqli_connect('localhost','root');

if($con){
	echo "connection successful"; 
}else {
	echo "no connection";
}

mysqli_select_db($con, 'rkk');

$Name = $_POST['Driver Name'];
$Vehicle = $_POST['Vehicle Reg. No.'];
$checkbox = $_POST['checkbox'];
$comment = $_POST['comment'];

$query = " insert into 'info_vehicle'('id','Driver Name', 'Vehicle Reg. No.', 'checkbox', 'comment') 
values ('0',$Driver Name', '$Vehicle Reg. No.', '$checkbox', '$comment')";

echo $query ;

mysqli_query($con, $query);



?>