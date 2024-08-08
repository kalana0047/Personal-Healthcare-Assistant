<?php include 'patientlogic.php';?>
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
background: linear-gradient(90deg, rgba(22,194,213,1) 51%, rgba(137,222,226,1) 75%, rgba(16,33,125,1) 91%); #10217d;">
	<div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="adminhome.php">Home</a>
  <a href="patientR.php">Patient Registration</a>
  <a href="doctorR.php">Doctor Registration</a>
  <a href="labR.php">Laboratory Registration</a>
  <a href="pharmacyR.php">Pharmacy Registration</a>
</div>
<div class="up"><button class="openbtn" onclick="openNav()">☰ Admin Menu</button> </div>


<div class="divL">


    <h1 align="center" style="color: white;">Patient Registration</h1>
  <div class="divpatient">
  <form action="patientR.php" method = "post"  enctype="multipart/form-data">
    <label for="PatientID">Patient NIC</label>
    <input type="text" id="patientNIC" name="NIC" placeholder="Patient NIC..">

     <label for="Patient fullname">Patient Name</label>
    <br><input type="text" id="name" name="firstname"  placeholder="Patient First name.." style="width:49.7%;">
    <input type="text" id="patientname" name="lastname"  placeholder="Patient Last name.." style="width:49.8%;">

     <br><label for="Patientbirthday">Birthday</label>
    <input type="text" id="bday" name="bday" placeholder="Birthday.."><br><br>


    <label for="maritial status">Maritial Status</label><br><br>
    Single<input type="radio" name="maritialstatus" value = "single">
    Married<input type="radio" name="maritialstatus" value = "married">
    Divorced<input type="radio" name="maritialstatus" value= "divorced">
    Widow<input type="radio" name="maritialstatus" value = "widow"><br><br>

    <label for="Patientd">Long term suffering diseases from birth</label>
    <input type="text" id="diseases" name="diseases" placeholder="Special note about diseases..">

    <label for="Patienal">Allergies of the patient</label>
    <input type="text" id="al" name="al" placeholder="Special note about allergies..">

    <label for="Patienad">Home Town</label>
    <input type="text" id="homemtown" name="hometown" placeholder="Home town..">


    <label for="Patienad">Home address</label>
    <input type="text" id="address" name="address" placeholder="Address..">

  
    <label for="Patienmn">Phone Number</label>
    <br><input type="text" id="cpnumber" name="cpnumber" placeholder="land number.." style="width:49.7%;">
    <input type="text" id="mnumber" name="mnumber" placeholder="Mobile Number.." style="width:49.8%;">

    <label for="Patienem">E mail</label>
    <input type="text" id="email" name="Email" placeholder="email..">

    <br><label for="Patiendc">Family Doctor</label>
    <input type="text" id="fdoctor" name="fdoctor" placeholder="Family Doctor..">

    <label for="file">Upload a PDF with a photo of patient NIC and the Birth Certificate</label><br><br>
    <input type="file" id="myFile" name="myfile"><br>

    <input type="submit" value="Register" name="upload">
    <input type="reset" value="Cancel">



  </form>
  </div>


<h1 align="center" style="color: white;">Create Account</h1>

<div class="divpatient">
  <form action="patientR.php" method="post">

    <label for="PatientID">Patient NIC</label>
    <input type="text" id="patientNIC" name="NIC" placeholder="Patient NIC..">

    <label for="Patientusername">Patient Username</label>
    <input type="text" id="Patientusername" name="username" placeholder="Patient Username..">

    <label for="Patientpassword">Create Password</label>
    <input type="text" id="password" name="password" placeholder="Create password">

    <label for="Patientpassword">Confirm Password</label>
    <input type="text" id="Patientpassword" name="Patientpassword" placeholder="Confirm password">

    <input type="submit" value="Create Account" name="createaccount">
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