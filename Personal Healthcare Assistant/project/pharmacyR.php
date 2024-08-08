
<?php include 'pharmacylogic.php';?>
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
background: linear-gradient(90deg, rgba(22,194,213,1) 51%, rgba(137,222,226,1) 75%, rgba(16,33,125,1) 91%);color: #10217d;">
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

    <h1 align="center" style="color: white;">Pharmacy Registration</h1>
  <div class="divpatient">
  <form action="pharmacyR.php"  method="post" enctype="multipart/form-data">
    <label for="PatientID">Registration Number</label>
    <input type="text" id="patientNIC" name="Rnumber" placeholder="Registration Number..">

     <label for="Patient fullname">Registered Name</label>
    <br><input type="text" id="patientname" name="Name"  placeholder="Registered Name.." >
    
    <label for="Patienad">Address</label>
    <input type="text" id="address" name="address" placeholder="Address..">

  
    <label for="Patienmn">Phone Number</label>
    <br><input type="text" id="cpnumber" name="cpnumber" placeholder="Mobile Number.." style="width:49.7%;">
    <input type="text" id="mnumber" name="mnumber" placeholder="Land Number.." style="width:49.8%;">

    <label for="Patienmn">Fax</label>
    <br><input type="text" id="cpnumber" name="Fax" placeholder="Fax.." >

     <label for="Patienmn">E-mail</label>
    <br><input type="text" id="cpnumber" name="Email" placeholder="E-mail.." >

    <label for="Patienmn">Web Site</label>
    <br><input type="text" id="cpnumber" name="web" placeholder="Web Adreess.." >

    <label for="file">Upload a PDF with a photo of Registration Certificate</label><br><br>
    <input type="file" id="myFile" name="myfile"><br>


    <input type="submit" value="Register" name="upload">
    <input type="reset" value="Cancel">

  </form>
  </div>

  <h1 align="center" style="color: white;">Create Account</h1>

  <div class="divpatient"> 
  <form action="pharmacyR.php" method ="post">
    <label for="PharmacyID">Pharmacy ID</label>
    <input type="text" id="PharmacyID" name="PharmacyID" placeholder="Pharmacy ID..">

    <label for="Pharmacyusername">Pharmacy Username</label>
    <input type="text" id="Pharmacyusername" name="username" placeholder="Pharmacyusername..">

    <label for="Pharmacypassword">Create Password</label>
    <input type="text" id="Pharmacypassword" name="password" placeholder="Create password">

   <label for="Pharmacypassword">Confirm Password</label>
    <input type="text" id="Pharmacypassword" name="Pharmacypassword" placeholder="Confirm password">

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