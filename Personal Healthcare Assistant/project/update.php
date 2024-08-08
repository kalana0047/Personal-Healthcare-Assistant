<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="patientregister.css">
</head>
<body style="background-color:#527c88;color: #10217d;">

<?php

include 'config.php';
$ID = $_GET['NIC'];
$Record = mysqli_query($con,"SELECT * FROM `patients` WHERE NIC=$ID");
$data = mysqli_fetch_array($Record);


?>
	<div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="patientregister.html">Patient Registration</a>
  <a href="doctorregister.html">Doctor Registration</a>
  <a href="laboratoryregister.html">Laboratory Registration</a>
  <a href="pharmacyregister.html">Pharmacy Registration</a>
</div>
<div class="up"><button class="openbtn" onclick="openNav()">☰ Admin Menu</button> </div>


<div class="divL">


    <h1 align="center" style="color: white;">Patient details update</h1>
  <div class="divpatient">
  <form action="update1.php" method = "post"  enctype="multipart/form-data">
    <label for="PatientID">Patient NIC</label>
    <input type="text" id="patientNIC" name="NIC" placeholder="Patient NIC.." value="<?php echo $data['NIC'] ?>" >

     <label for="Patient fullname">Patient Name</label>
    <br><input type="text" id="name" name="firstname"  placeholder="Patient First name.." style="width:49.7%;"value="<?php echo $data['Fname'] ?>" >
    <input type="text" id="patientname" name="lastname"  placeholder="Patient Last name.." style="width:49.8%;" value="<?php echo $data['Lname'] ?>" >

     <br><label for="Patientbirthday">Birthday</label>
    <input type="text" id="bday" name="bday" placeholder="Birthday.." value="<?php echo $data['Bday'] ?>" ><br><br>

    <br><label for="">Maritial status</label>
    <input type="text" id="" name="maritialstatus" placeholder="Maritial Status.." value="<?php echo $data['MaritialStatus'] ?>" ><br><br>


    <label for="Patientd">Long term suffering diseases from birth</label>
    <input type="text" id="diseases" name="diseases" placeholder="Special note about diseases.." value="<?php echo $data['Diseases'] ?>" >

    <label for="Patienal">Allergies of the patient</label>
    <input type="text" id="al" name="al" placeholder="Special note about allergies.." value="<?php echo $data['Allergies'] ?>" >

    <label for="Patienad">Home Town</label>
    <input type="text" id="homemtown" name="hometown" placeholder="Home town.." value="<?php echo $data['HomeTown'] ?>">


    <label for="Patienad">Home address</label>
    <input type="text" id="address" name="address" placeholder="Address.." value="<?php echo $data['HomeAddress'] ?>" >

  
    <label for="Patienmn">Phone Number</label>
    <br><input type="text" id="cpnumber" name="cpnumber" placeholder="land number.." style="width:49.7%;"value="<?php echo $data['Lnumber'] ?>" >
    <input type="text" id="mnumber" name="mnumber" placeholder="Mobile Number.." style="width:49.8%;"value="<?php echo $data['Pnumber'] ?>" >

    <label for="Patienem">E mail</label>
    <input type="text" id="email" name="Email" placeholder="email.."value="<?php echo $data['Email'] ?>" >

    <br><label for="Patiendc">Family Doctor</label>
    <input type="text" id="fdoctor" name="fdoctor" placeholder="Family Doctor.." value="<?php echo $data['Fdoctor'] ?>" >

    <input type="submit" value="update" name="update">
    <input type="reset" value="Cancel">



  </form>
  </div>

    
</body>
</html>