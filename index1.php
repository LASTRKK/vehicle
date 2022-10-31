<?php 

include('footerForAll.php'); 
session_start();  
if($_SESSION["loggedIn"] == 0)
    header("location: index.php");
  $user_ = $_SESSION["user"];

?>
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
    date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
    $timeout = date("H:i:s");
    $date = date("Y/m/d");
    $remark=$_POST["remark"];
    $checkbox=$_POST["checkbox"];
$checkbox=implode(",",$checkbox);
//echo "$checkbox<br>";

    
    $query = "insert into form1(name,email,timeout,date,checkbox,remark) values('$name','$email','$timeout','$date','$checkbox','$remark')" ;

    $run = mysqli_query($conn,$query) or die(mysqli_error());

    if($run){
      echo "<script>alert('Complaint details updated successfully');</script>";
      //echo $success;
      // and refresh
        
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
<html>
<html>
<head>
  <title>Vehicle Inspection</title>
</head>
<body style="background-color:powderblue;">
  <link rel = "stylesheet" href= "BootStrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="navbar3.css">
   <script src= "BootStrap/js/bootstrap.min.js"></script>
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

</head>

 <body  onload=display_ct();>

<nav class="navbar navbar-default"  data-offset-top="200">

    <div class="navbar-header">
    <img src="http://localhost/rkk/c3.jpeg" alt="omc" width="200" height="50">
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="li"><a  href="index1.php">Home</a></li>
      <li><a id = "li" href="front.php" >Entry Vehicle</a></li>
      <li><a id = "li" href="returnvehicle1.php" >Returned Vehicle</a></li>
      <li><a id = "li" href="logout.php" >Logout</a></li> 
    </ul>
  </div>
</nav>
<!-- time and date script -->

<script type="text/javascript"> 
function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}
function display_ct() {
      var date = new Date();
        var hours = date.getHours() > 12 ? date.getHours() - 12 : date.getHours();
        var am_pm = date.getHours() >= 12 ? "PM" : "AM";
        hours = hours < 10 ? "0" + hours : hours;
        var minutes = date.getMinutes() < 10 ? "0" + date.getMinutes() : date.getMinutes();
        var seconds = date.getSeconds() < 10 ? "0" + date.getSeconds() : date.getSeconds();
        time = hours + ":" + minutes + ":" + seconds + " " + am_pm;
document.getElementById('t1').innerHTML = time;
var x = new Date()
var x1=x.getMonth() + 1+ "/" + x.getDate() + "/" + x.getFullYear();
document.getElementById('t2').innerHTML = x1;
display_c();
 } 
 
</script>


<div style= "float:right; padding-right:8px;padding-top:10px;">
  <p id = "timeDisplay" ><b> Time : <b><span id="t1"></span>
</p>
  <p id = "dateDisplay"> Date : <span id="t2"></span></p>
</div>    
    
      
    </div>
  </div>
  <head>
<style>
  h1 {text-align: left;}
div {text-align: center;}
div {text-align: center;}
 input.largerCheckbox {
            width: 20px;
            height: 20px;
        }
</style>
</head>

  
  <form action="index1.php"method="post">
    
    <h1 style="color:blue;">VEHICLE INSPECTION</h1>
    <div>
    <P><label><h3>Driver Name</h3></label><input type="text" name="name"></P>
    <P><label><h3>Vehicle Reg. No</h3></label><input type="text" name="email"></P>

<label  for = "checkbox">
<p style="text-align: left; width:200px;  display: inline-block;">
1.Driver Helmet
<input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="1.Driver Helmet"><br /> 
2.Safety Shoe<input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="2.Safety Shoe"><br />  
3.Seat Belt<input type="checkbox"class="largerCheckbox" name="checkbox[ ]" value="3.Seat Belt"><br>  
4.Horn<input type="checkbox"class="largerCheckbox" name="checkbox[ ]" value="4.Horn"><br>  
5.AVA(Horn during Reverse gear)<input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="5.AVA(Horn during Reverse gear)"><br> 
6.Indicator<input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="6.Indicator"><br>  
7.Head Light<input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="7.Head Light"><br>  
8.Fog Light<input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="8.Fog Light"><br>  
9.Side View Mirror<input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="9.Side View Mirror"><br></p>
<p style="text-align: right; width:300px;  display: inline-block;">  
10.Fire Extinguisher<input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="10.Fire Extinguisher"><br>
11.Tail Gate<input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="11.Tail Gate"><br>  
12.Parking Brake<input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="12.Parking Brake"><br>  
13.Service Brake<input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="13.Service Brake"><br>  
14.Rear View Camera<input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="14.Rear View Camera"><br>  
15.Valid Driving Licence<input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="15.Valid Driving Licence"><br> 
16.Helper not Allowed<input type="checkbox" class="largerCheckbox" name="checkbox[ ]" value="16.Helper not Allowed"><br>  
17.Use of Mobile During Driving<input type="checkbox" class="largerCheckbox" name="checkbox[ ]" value="17.Use of Mobile During Driving"><br>
18.All<input type="checkbox" class="largerCheckbox" name="checkbox[ ]" value="18.ALL"></p>
</label>
<P><label><h3>Remark</h3></label><input type="text" name="remark"></P>

<div>
    <div style="text-align: left; width:250px;  display: inline-block;"><h3><input type="submit" name="publish" value="ENTRY"></div></h3>
        <div style="text-align: center; width:80px;  display: inline-block;">  
<h3><input type="submit" name="save" value="RETURN"></h3></div></div>


      </form>
    </div>
    </div>  
     

  </form>
</body>
</html>