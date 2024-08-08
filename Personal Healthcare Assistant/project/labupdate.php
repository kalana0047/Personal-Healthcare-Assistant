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
$ID = $_GET['Rnumber'];
$Record = mysqli_query($con,"SELECT * FROM `laboratory` WHERE Rnumber=$ID");
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

    <h1 align="center" style="color: white;">Laboratory Update</h1>
  <div class="divpatient">
  <form action="labupdate1.php"  method="post" enctype="multipart/form-data">
    <label for="PatientID">Registration Number</label>
    <input type="text" id="patientNIC" name="Rnumber" placeholder="Registration Number.."value="<?php echo $data['Rnumber'] ?>">

    <label for="Patient fullname">Registered Name</label>
    <br><input type="text" id="patientname" name="Name"  placeholder="Registered Name.."value="<?php echo $data['Name'] ?>" >
    
    <label for="Patienad">Address</label>
    <input type="text" id="address" name="address" placeholder="Address.."value="<?php echo $data['Address'] ?>">

  
    <label for="Patienmn">Phone Number</label>
    <br><input type="text" id="cpnumber" name="cpnumber" placeholder="Mobile Number.." style="width:49.7%;"value="<?php echo $data['pnumber'] ?>">
    <input type="text" id="mnumber" name="mnumber" placeholder="Land Number.." style="width:49.8%;" value="<?php echo $data['Lnumber'] ?>">

    <label for="Patienmn">Fax</label>
    <br><input type="text" id="cpnumber" name="Fax" placeholder="Fax.."value="<?php echo $data['Fax'] ?>" >

     <label for="Patienmn">E-mail</label>
    <br><input type="text" id="cpnumber" name="Email" placeholder="E-mail.." value="<?php echo $data['Email'] ?>">

    <label for="Patienmn">Web Site</label>
    <br><input type="text" id="cpnumber" name="web" placeholder="Web Adreess.."value="<?php echo $data['Web'] ?>" >

    <input type="submit" value="Update" name="Update">
    <input type="reset" value="Cancel">

  </form>
  </div>
    
</body>
</html>