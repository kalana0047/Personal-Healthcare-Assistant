<?php
session_start();

if(!isset($_SESSION["NIC"]))
{
	header("location:index.php");
}

?>

<?php include 'lablogic.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="patientregister.css">
    <style>
      .topicdiv{
        background-color:white;
        width:90%;
        align:center;
        justify-content: center;
    align-items: center;
    box-shadow: 0 15px 50px rgb(0 0 0 / 10%);

      }
      .picdiv{
        width:90%;
        float: left;
        align:center;
      }
      .pcdiv{
      
       margin-left:40%;
        align:center;
      }


    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body style="background: rgb(16,33,125);
background: linear-gradient(90deg, rgba(16,33,125,1) 41%, rgba(22,194,213,1) 77%);color: #10217d;">
	<div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="labprofile.php">Profile</a>
  <a href="labhome.php">Home</a>
  <a href="labupload.php">Upload Report</a>
  <a href="labupload.php">View Reports</a>
  <a href="#">Contact US</a>
  <a href="logout.php">Log Out</a>
  
</div>
<div class="up"><button class="openbtn" onclick="openNav()">☰ Lab Menu</button> </div>

<h1 style="text-align:center;color:white;"> User Profile</h1>


<div class="divL">


<div class="topicdiv">
<div class="pic div">
    <div class="pcdiv"><img src="profile.png" width="200px" height="200px" class="pimg"></div>
</div><br><br>
<?php

$con = new PDO("mysql:host=localhost;dbname=group44",'root','');


	$str = $_SESSION["NIC"];
	$sth = $con->prepare("SELECT * FROM `laboratory` WHERE Rnumber = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
		?>
		
		<table style="padding:10px;" class="table table-striped">
        <tr>
				<th>Registered Number </th>
				<td><?php echo $row->Rnumber; ?></td>
			</tr>
			<tr>
				<th>Name  </th>
				<td><?php echo $row->Name; ?></td>
			</tr>
            <tr>
                <th>Address </th>
			    <td><?php echo $row->Address; ?></td></tr> 
			
                <th>Mobile Number</th>
			    <td><?php echo $row->pnumber; ?></td>
			</tr> 
            <tr>
                <th>Cell phone number</th>
			    <td><?php echo $row->Lnumber ?></td>
			</tr>
      </tr>
            <tr>
                <th>Fax</th>
			    <td><?php echo $row->Fax?></td>
			</tr>
            <tr>
                <th>Email</th>
			    <td><?php echo $row->Email?></td>
			</tr>
      <tr>
                <th>Website</th>
			    <td><?php echo $row->Web?></td>
			</tr>

		</table>
<?php 


?>

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