<?php
session_start();


if(!isset($_SESSION["NIC"]))
{
	header("location:index.php");
}

?>



<?php include 'labuploadlogic.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="patientregister.css">
    
</head>
<body style="background: rgb(22,194,213);
background: linear-gradient(90deg, rgba(22,194,213,1) 54%, rgba(16,33,125,1) 97%);color: #10217d;">
	<div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="labhome.php">Home</a>
  <a href="labreports.php">Reports </a>
  <a href="Lreportsearch.php">Reports search</a>
  <a href="labupload.php">Report Upload</a>
  <a href="#">Contact Us</a>
  <a href="logout.php">Log Out</a>
</div>
<div class="up"><button class="openbtn" onclick="openNav()">☰ Lab Menu</button> </div>


<div class="divL">


    <h1 align="center" style="color: white;">Report Upload</h1>
  <div class="divpatient">
  <form action="labupload.php" method = "post"  enctype="multipart/form-data">
    <label for="PatientID">Patient NIC</label>
    <input type="text" id="patientNIC" name="NIC" placeholder="Patient NIC..">

    <label for="Patient fullname">Report Type</label>
    <br><input type="text" id="name" name="type"  placeholder="ReportType..">

    <label for="file">Select Report</label><br><br>
    <input type="file" id="myFile" name="myfile"><br>

    <input type="submit" value="Upload" name="upload">
    <input type="reset" value="Cancel">



  </form>
  </div>







</div>







<script>
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}
</script>



</body>
</html>