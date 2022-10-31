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
   

  
  if(!empty($_POST['name']) && !empty($_POST['vehiclenumber'])   && !empty($_POST['checkbox']) && !empty($_POST['Licence']) && !empty($_POST['Wheeler'])){

    $name = $_POST['name'];
    $vehiclenumber = $_POST['vehiclenumber'];
    date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
    $timein = date("H:i:s");
    $created_at = date("Y/m/d");
    $Licence =$_POST['Licence'];
    $Wheeler =$_POST['Wheeler'];
    $checkbox=$_POST["checkbox"];
    $checkbox=implode(",",$checkbox);
    //echo "$checkbox<br>";
    


    
    $query = "insert into form(name,vehiclenumber,timein,created_at,checkbox,Licence,Wheeler,Authority) values('$name','$vehiclenumber','$timein','$created_at','$checkbox','$Licence','$Wheeler','$user_')" ;


    $run = mysqli_query($conn,$query) or die(mysqli_error());

    if($run){
      echo "<script>alert('Complaint details updated successfully');</script>";
        
    }
    else{

      echo "form not submitted";
      }   

    
    }
    else{
      echo "all fields ";
    }
  }
   elseif (isset($_POST['save'])) {
        # Save-button was clicked
        if(!empty($_POST['name']) && !empty($_POST['vehiclenumber'])   && !empty($_POST['checkbox']) && !empty($_POST['remark'])){


    $name = $_POST['name'];
    $vehiclenumber = $_POST['vehiclenumber'];
    date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
    $timeout = date("H:i:s");
    $created_at = date("Y/m/d");
    $remark=$_POST["remark"];
    $Wheeler =$_POST["Wheeler"];
     $Licence =$_POST['Licence'];
     
    
    $checkbox=$_POST["checkbox"];
$checkbox=implode(",",$checkbox);
//echo "$checkbox<br>";

    
    $query = "insert into form1(name,vehiclenumber,timeout,created_at,checkbox,remark,Licence,Wheeler,Authority) values('$name','$vehiclenumber','$timeout','$created_at','$checkbox','$remark','$Licence','$Wheeler','$user_')" ;

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
      echo "all fields ";
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


</head>
<style>
html {
  position: relative;
  min-height: 100%;
}body {
  /* Margin bottom by footer height */
  margin-bottom: 40px;
}#head{
    text-decoration:underline;
}input::invalid, input:focus:invalid, input:invalid {
    border-radius: 5px;
    border:soild 1px;

}input::valid, input:valid {
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
  input.largerCheckbox {
            width: 20px;
            height: 20px;
        }

 </style>

 <body  onload=display_ct();>

 <nav class="navbar navbar-expand-sm bg-danger navbar-dark">
    <div class="navbar-header">

    <img src="http://localhost/rkk/c3.jpeg" alt="omc" width="200" height="58">
    <?php echo "Logged in as : ".$user_;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
    </div>
    <ul class="nav navbar-nav navbar-center">
    <div><p><h3 style="color:blue;">VEHICLE INSPECTION </div></h3></ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="li"><a  href="index2.php">Home</a></li>
      <li><a id = "li" href="front.php" >Entry Vehicle</a></li>
      <li><a id = "li" href="returnvehicle.php" >Returned Vehicle</a></li>.
      <li><a id = "li" href="contac.php" >Contact</a></li>
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
 

  
	<form action="index2.php"method="post">
		
	<h1><label for="branch">Select Site:</label>

<select name="branch" id="region">
  <option value="Gandhamardan">Gandhamardan</option>
  <option value="Daitari">Daitari</option>
</select></h1>

   <div style="margin-left:11px;padding-bottom:12px">
      
		<label>Driver Name</label><input type="text" name="name" id="name" >
		<label>Vehicle Reg. No</label><input type="text" name="vehiclenumber" id="vehiclenumber" >
    <label>Driving Licence No</label><input type="text" name="Licence" id="Licence" >
    <label>Wheeler</label><input type="number" size="2" name="Wheeler" id="Wheeler">
   
   
    <br>
 
 


	<div style="margin-left:310px;padding-bottom:12px">
	<label  for = "checkbox" >

      
    1.Vehicle Registration & Fitness Certificate
<input type="checkbox" class="largerCheckbox" name="checkbox[ ]" value="1.Vehicle Registration & Fitness Certificate YES">Yes
<input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="1.Vehicle Registration & Fitness Certificate NO">No<br>
     2.Valid Driving Licence & ID Proof 
      <input type="checkbox"class="largerCheckbox" name="checkbox[ ]" value="2.Valid Driving Licence & ID Proof YES" >Yes
      <input type="checkbox"class="largerCheckbox" name="checkbox[ ]" value="2.Valid Driving Licence & ID Proof NO" >No<br>

       <td>3.Passed Alcohol Check</td>
      <input type="checkbox"class="largerCheckbox" name="checkbox[ ]" value="3.Passed Alcohol Check YES" >Yes
      <input type="checkbox"class="largerCheckbox" name="checkbox[ ]" value="3.Passed Alcohol Check NO" >No<br>

       <td>4.Strong constructed Operator Cabin </td>
      <input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="4.Strong constructed Operator Cabin YES" >Yes
      <input type="checkbox"class="largerCheckbox" name="checkbox[ ]" value="4.Strong constructed Operator Cabin NO" >No<br>
      
       <td>5.3-Point support access to operator cabin </td>
      <input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="5.3-Point support access to operator cabin YES" >Yes
      <input type="checkbox"class="largerCheckbox" name="checkbox[ ]" value="5.3-Point support access to operator cabin NO" >No<br>
   
       <td>6.Adjustable Operator Seat </td>
      <input type="checkbox"class="largerCheckbox" name="checkbox[ ]" value="6.Adjustable Operator Seat YES" >Yes
      <input type="checkbox"class="largerCheckbox" name="checkbox[ ]" value="6.Adjustable Operator Seat NO" >No<br>
      
       <td>7.PPE (Helmet, Fl Jacket & Safety Shoes) </td>
      <input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="7.PPE (Helmet, Fl Jacket & Safety Shoes) YES" >Yes
      <input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="7.PPE (Helmet, Fl Jacket & Safety Shoes) NO" >No<br>
    
       <td>8.Seat Belt  Seat Belt Reminder</td>
      <input type="checkbox"class="largerCheckbox" name="checkbox[ ]" value="8.Seat Belt  Seat Belt Reminder YES" >Yes
      <input type="checkbox"class="largerCheckbox" name="checkbox[ ]" value="8.Seat Belt  Seat Belt Reminder NO" >No<br>
   
       <td>9.Key Operated Self Starter </td>
      <input type="checkbox"class="largerCheckbox"name="checkbox[ ]" value="9.Key Operated Self Starter YES" >Yes
      <input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="9.Key Operated Self Starter NO" >No<br>
  
       <td>10.Functioning of Horn </td>
      <input type="checkbox"class="largerCheckbox" name="checkbox[ ]" value="10.Functioning of Horn YES" >Yes
      <input type="checkbox"class="largerCheckbox" name="checkbox[ ]" value="10.Functioning of Horn NO" >No<br>
     
       <td>11.Propel Shaft Guard </td>
      <input type="checkbox"class="largerCheckbox" name="checkbox[ ]" value="11.Propel Shaft Guard YES" >Yes
      <input type="checkbox"class="largerCheckbox" name="checkbox[ ]" value="11.Propel Shaft Guard NO" >No<br>
      
       <td>12.AVA (Horn during reverse gear) </td>
      <input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="12.AVA (Horn during reverse gear)  YES" >Yes
      <input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="12.AVA (Horn during reverse gear) " >No<br>
      
       <td>13.Side Indicator Lights </td>
      <input type="checkbox"class="largerCheckbox" name="checkbox[ ]" value="13.Side Indicator Lights  YES" >Yes
      <input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="13.Side Indicator Lights  NO" >No<br>
      
       <td>14.Head Light & Fog Light</td>
      <input type="checkbox"class="largerCheckbox" name="checkbox[ ]" value="14.Head Light & Fog Light YES" >Yes
      <input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="14.Head Light & Fog Light NO" >No<br>
      
       <td>15.Rear Flood Light </td>
      <input type="checkbox"class="largerCheckbox" name="checkbox[ ]" value="15.Rear Flood Light  YES" >Yes
      <input type="checkbox"class="largerCheckbox" name="checkbox[ ]" value="15.Rear Flood Light  NO" >No<br>
      
       <td>16.Retro Reflective Tape/ Paint </td>
      <input type="checkbox"class="largerCheckbox" name="checkbox[ ]" value="16.Retro Reflective Tape/ Paint  YES" >Yes
      <input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="16.Retro Reflective Tape/ Paint  NO" >No<br>
      
       <td>17.Side View Mirror </td>
      <input type="checkbox"class="largerCheckbox" name="checkbox[ ]" value="17.Side View Mirror  YES" >Yes
      <input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="17.Side View Mirror  NO" >No<br>
      
       <td>18.Fire Extinguisher </td>
      <input type="checkbox"class="largerCheckbox" name="checkbox[ ]" value="18.Fire Extinguisher  YES" >Yes
      <input type="checkbox"class="largerCheckbox" name="checkbox[ ]" value="18.Fire Extinguisher  NO" >No<br>
      
       <td>19.Tail Gate Protection </td>
      <input type="checkbox"class="largerCheckbox" name="checkbox[ ]" value="19.Tail Gate Protection  YES" >Yes
      <input type="checkbox"class="largerCheckbox" name="checkbox[ ]" value="19.Tail Gate Protection  NO" >No<br>
     
       <td>20.Service Brake </td>
      <input type="checkbox"class="largerCheckbox" name="checkbox[ ]" value="20.Service Brake  YES" >Yes
      <input type="checkbox"class="largerCheckbox" name="checkbox[ ]" value="20.Service Brake  NO" >No<br>
      
       <td>21.Parking Brake </td>
      <input type="checkbox"class="largerCheckbox" name="checkbox[ ]" value="21.Parking Brake  YES" >Yes
      <input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="21.Parking Brake  NO" >No<br>
      
       <td>22.Exhaust  Retard Brake </td>
      <input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="22.Exhaust  Retard Brake  YES" >Yes
      <input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="22.Exhaust  Retard Brake  NO" >No<br>
      
       <td>23.Emergency Brake </td>
      <input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="23.Emergency Brake  YES" >Yes
      <input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="23.Emergency Brake  NO" >No<br>
      
       <td>24.Rear View Camera </td>
      <input type="checkbox"class="largerCheckbox" name="checkbox[ ]" value="24.Rear View Camera  YES" >Yes
      <input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="24.Rear View Camera  NO" >No<br>
      
       <td>25.Helper not allowed </td>
      <input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="25.Helper not allowed  YES" >Yes
      <input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="25.Helper not allowed  NO" >No
      <br>
       <td>26.All OK </td> 
      <input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="26.All Ok  YES" >Yes
      <input type="checkbox" class="largerCheckbox"name="checkbox[ ]" value="26.All Ok  NO" >No
      </label>
<label>Remark</label><input type="text" name="remark"> 
</P>

<div>
		<div style="text-align: left; width:250px;  display: inline-block;"><h3><input type="submit" name="publish" value="ENTRY"></div></h3>
        <div style="text-align: center; width:80px;  display: inline-block;">  
<h3><input type="submit" name="save" value="RETURN"></h3></div></div>


      
    </div>
    </div>  
     

	
</body>
</html>