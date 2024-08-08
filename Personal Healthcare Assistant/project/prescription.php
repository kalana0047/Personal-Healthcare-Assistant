<?php
session_start();

if(!isset($_SESSION["NIC"]))
{
	header("location:index.php");
}

?>

<?php include 'prescriptionlogic.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="D_prescription.css">
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<body style="background: rgb(22,194,213);
background: linear-gradient(90deg, rgba(22,194,213,1) 38%, rgba(16,33,125,1) 60%);color: #10217d;">
	<div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="doctorhome.php">Home</a>
  <a href="prescription.php"> Create Prescription</a>
  <a href="myprescriptions.php">My Prescriptions</a>
  <a href="#">appointments</a>
  <a href="#">Contact Support</a>
</div>

<div class="up"><button class="openbtn" onclick="openNav()">☰ Doctor Menu</button> </div>


<div class="divL">


    <h1 align="center" style="color:white; ">Patient details</h1>
  <div class="divpatient">
  <form  method="post">
    <label for="PatientID">Patient ID</label>
    <input type="text" id="patientID" name="search" placeholder="Patient ID..">
    <input type="submit" value="view details" name="submit">
  </form>
  </div>

  <div class="pdetails">
  <?php

$con = new PDO("mysql:host=localhost;dbname=group44",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `patients` WHERE NIC = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		
		<table style="padding:10px;" class="table table-striped">
        <tr>
				<th>NIC </th>
				<td><?php echo $row->NIC; ?></td>
			</tr>
			<tr>
				<th>Firstname  </th>
				<td><?php echo $row->Fname; ?></td>
			</tr>
            <tr>
                <th>Lastname </th>
			    <td><?php echo $row->Lname; ?></td>
			</tr>


            <th>Lastname </th>
			    <td><?php echo $row->Lname; ?></td>

			<tr>
                <th>Birthday</th>
			    <td><?php echo $row->Bday; ?></td>
			</tr>
           
            <tr>
                <th>Long time Diseases</th>
			    <td><?php echo $row->Diseases; ?></td>
			</tr>
            <tr>
                <th>Allergies</th>
			    <td><?php echo $row->Allergies; ?></td>
			</tr>
            <tr>
                <th>HomeTown</th>
			    <td><?php echo $row->HomeTown ?></td>
			</tr>
      </tr>
            <tr>
                <th>Email</th>
			    <td><?php echo $row->Email ?></td>
			</tr>

		</table>
<?php 
	}
		
		
		else{
			echo "Name Does not exist";
		}


}

?>
       
  </div>
  <h3> Other </h3>
      

      <a href="pastprescriptions.php" style="text-decoration:none;"><button class="otherb">past prescriptions</button></a>
      <a href="Preports.php" style="text-decoration:none;"><button class="otherb">Reports</button></a>
      

      
  


</div>
<div class="divR">
  
  <h1 align="center" style="color:white ">Prescription</h1>

  <div class="divpatient">
    <form method="post" action="prescription.php">
    Patient ID 
    <input type="text" id="patientID" name="patientID" placeholder="Patient ID..">
    Patient Email
    <input type="text" id="patientID" name="email" placeholder="Patient email..">
    Prescription
    <textarea  name="prescription" rows="30" cols="50"></textarea>
     <input type="submit" value="Update Prescription" name="upload">
     
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