<?php 
include('db_connect_db_new.php');  
	
 
 
	
?>
<html>
  <head>
    <meta content="text/html; charset=windows-1252" http-equiv="content-type">
    <link rel="stylesheet" href="BootStrap/css/bootstrap.min.css">
    <style>

	#col-1{

		margin-left:-10%;
		
	}
	span {
		text-underline-position: right;
		font-size: 20px;
	}
	@media print {
  /* style sheet for print goes here */
  .hide-from-printer{  display:none; }
}

	.row{margin-top: 3%;margin-left: 6%;}
  @page { 
  
    size: Envelope DL landscape;
    float: none;
    width: auto; 
  	border: 0; 
  	margin: 0 5%; 
  	padding: 0; 
  	font-size:13pt;
  }
  .navbar-nav li.active a {
     color: #fff !important;
     background-color:#29292c !important;
    }
   .navbar {
    margin-bottom: 0;
    background-color:##ff4d4d;
    border: 0;
    font-size: 15px !important;
    letter-spacing: 2px;
    opacity:0.9;
    color: #000000;
  }




</style> </head>
  <body>
    <div  class="row" >
      <div class="col-sm-8" >

    <p style="width: 400px;" id="col-1"><img src="http://192.168.90.150:7882/visitor/c3.jpeg" alt="omc" width="400" height="70">
        <p style="width: 400px;" id="col-1">Date :<?php echo $result['Date'];?>&nbsp;&nbsp;
          Time In :&nbsp;<?php echo $result['TimeIN']?></p>
        
        <span id="col-1" name="main">Name :&nbsp;
          <?php echo $result['Name'];?></span><br>
           <span id="col-1">Vehicle Reg. No. :&nbsp;
              <?php echo $result['Purpose'];?></span><br>
        <span id="col-1">Contact No :&nbsp;
          <?php echo $result['Contact']?><br>
          <span id="col-1">Receipt ID :&nbsp;
            <?php echo $result['ReceiptID'];?></span><br>

            <?php echo $result['Received'];?></span><br>
            <span id="col-1">Checkbox :&nbsp;
            <?php echo $result['checkbox'];?></span><br>
            </span>
          </div>
    </div>
    <br>
    <form>
          <label>Valid Upto :</label>
          <input type="datetime-local" /name="">
        </form>
     <p style="width: 400px;"><b>The OMC Regional Office, Gandhamardan Iron Ore Mines , Suakati,758018</b></p>
     <br>
     <br>
     <div id="textbox">

</div>
<div style="clear: both;"></div>
<br>
     <p style="text-align: left; width:100px;  display: inline-block;"><b>Driver Sign</b></p>
     <p style="text-align: right; width:300px;  display: inline-block;"><b>Inspecting Authority</b></p>
    <br>
    <br>
 <p style="font-size:1vw;">ସୁରକ୍ଷା ବାର୍ତ୍ତା</p>
   <p style="font-size:1vw;"> ୧ . OMC ଆପଣଙ୍କୁ ସ୍ଵାଗତ ଜଣାଉଛି । </p>
     <p style="font-size:1vw;">୨ . ସମସ୍ତ ଡ୍ରାଇଭର ଭାଇ ମାନଙ୍କୁ ଅନୁରୋଧ କରାଯାଉଛି କି ଦୟାକରି ସୁରକ୍ଷା ଉପକରଣ ଯଥା ସେପ୍ଟି ହେଲମେଟ , ଛୋଡା , ଜ୍ୟାକେଟ , ମାସ୍କ ଆଦିର ବ୍ୟବହାର କରନ୍ତୁ ।</p><p style="font-size:1vw;">୩ . ଗାଡ଼ି ଚଳାଇବା ବ୍ୟବହାର କରନ୍ତୁ ନାହିଁ । ବେଳେ ଟ୍ରାଫିକ୍‌ ନିୟମ ମାନକୁ ଓ ମୋବାଇଲ ବ୍ୟବହାର କରନ୍ତୁ ନାହିଁ ।</p>
     <p style="font-size:1vw;">୪ . ଏଣ୍ଟ୍ରି ଗେଟକୁ ଆସିବା ପୂର୍ବରୁ ଗାଜିର</p>
     <p style="font-size:1vw;">୫ . କୌଣସି ପ୍ରକାର ନିଶା ବ୍ରେକ , ଲାଇଟ୍ , ହର୍ଷ , ବ୍ୟାକ ହର୍ୟ ଇତ୍ୟାଦି ଦେଇ କରି ଆସନ୍ତୁ । ସେବଳ କରନ୍ତୁ ନାହିଁ ଏବଂ ଅଯଥା ଗାଡ଼ିରୁ ଓହ୍ଲାନ୍ତୁ ନାହିଁ । </p>
     <p style="font-size:1vw;">୬ . ଗାଡ଼ିର ଗତିକୁ ଘଣ୍ଟାପ୍ରତି ୨୦ କିଲୋମିଟର ବେଗ ମଧ୍ୟରେ ସୀମିତ ରଖନ୍ତୁ ଏବଂ ଓଭର୍‌ ଟେଙ୍ଗି କରନ୍ତୁ ନାହିଁ ।</p>
     <p style="font-size:1vw;">୭. ଗାଡ଼ି ମାଲବ୍ଧ କୁ ବାହାରିବା ଓ INVOICE ଭଲ ଭାବରେ ଯାଞ୍ଚ କରନ୍ତୁ ଏବଂ </p>
    <p style="font-size:1vw;"> ୮ . ଏଣ୍ଟ୍ରି ଗେଟକୁ ଆସିବା ପୂର୍ବରୁ ନିଜର TP ଲୁହା ପଥରକୁ ଭଲ ଭାବରେ Topule କଭର କରି ଧୁଲେ ଧୂରେ ପଶ୍ଚାନ୍ତୁ । ନିଜର Original Driving Licence OMC Bar କୋଚ୍ଚ ସ୍କ୍ରିପ ଓ ଅନ୍ୟାନ୍ୟ ଦରକାରୀ କାଗଜ ଧରି ଆସନ୍ତୁ ।</p>
     <p style="font-size:1vw;">୯ . ଖଣି ମଧରେ ଶୃଙ୍ଖଳା ରକ୍ଷା କରନ୍ତୁ ଓ ପରିବେଶକୁ ସୁସ୍ଥ ରଖନ୍ତୁ । ଧନ୍ୟବାଦ ...</p>
    <div style="text-align:center;"> <button type="button" id="button" class="hide-from-printer"
        onclick="window.print()" value="Print Badge">Print Page</button> <a type="button"
        id="button" class="hide-from-printer" href="front.php">Back </a></div>
    <a type="button" id="button" class="hide-from-printer" href="front.php"> </a>
  </body>
</html>
