<?php
session_start();

if(!isset($_SESSION["NIC"]))
{
	header("location:index.php");
}

?>


<?php include 'patientlogic.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="patientregister.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
</head>
<body style="background-color:#527c88;color: #10217d;">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  
	<div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  
  <a href="adminhome.php">Home</a>
  <a href="patients.php">Patients</a>
  <a href="doctors.php">Doctors</a>
  <a href="labs.php">Labs</a>
  <a href="pharmacy.php">Pharmacies</a>
</div>
<div class="up"><button class="openbtn" onclick="openNav()">☰ Admin Menu</button> </div>
<br>

<div class="divL" style="margin-left: 0%;">


    <h1 align="center" style="color: white;">Patient Details</h1><br><br>


      <!-- fetch data -->

<div class="container">

<table class="table table-dark table-hover">
<thead>
<th  >NIC</th>
<th style="width:300px";>FName</th>
<th >LName</th>
<th >Birthday</th>
<th > Status</th>
<th >Diseases</th>
<th >Allergies</th>
<th >Home Town</th>
<th >Home Address</th>
<th >M Number</th>
<th>L Number</th>
<th >Email</th>
<th>Fdoctor</th>
<th >Identity</th>
<th >Download</th>
<th >Delete</th>
<th >Update</th>


</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['NIC']; ?></td>
      <td><?php echo $file['Fname']; ?></td>
      <td><?php echo $file['Lname']; ?></td>
      <td><?php echo $file['Bday']; ?></td>
      <td><?php echo $file['MaritialStatus']; ?></td>
      <td><?php echo $file['Diseases']; ?></td>
      <td><?php echo $file['Allergies']; ?></td>
      <td><?php echo $file['HomeTown']; ?></td>
      <td><?php echo $file['HomeAddress']; ?></td>
      <td><?php echo $file['Pnumber']; ?></td>
      <td><?php echo $file['Lnumber']; ?></td>
      <td><?php echo $file['Email']; ?></td>
      <td><?php echo $file['Fdoctor']; ?></td>
      <td><?php echo $file['Identity']; ?></td>

      <td><a href="patients.php?file_id=<?php echo $file['NIC'] ?>">Download</a></td>
      <td><a href="delete.php?NIC=<?php echo $file['NIC'] ?>" class = 'btn btn-danger'>Delete</a></td>
      <td><a href="update.php?NIC=<?php echo $file['NIC'] ?>" class = 'btn btn-danger'>update</a></td>
      
    </tr>
  <?php endforeach;?>

</tbody>
</table>
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