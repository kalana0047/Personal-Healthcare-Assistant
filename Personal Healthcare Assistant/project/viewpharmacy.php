<?php
session_start();

if(!isset($_SESSION["NIC"]))
{
	header("location:index.php");
}

?>


<?php
$con = mysqli_connect('localhost', 'root', '', 'group44');

if(!$con){

  die(mysqli_error("Error"+$con));

  
}

?>

<?php include 'preportslogic.php';?>
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
<body style="background: rgb(22,194,213);
background: linear-gradient(90deg, rgba(22,194,213,1) 54%, rgba(16,33,125,1) 97%);color: #10217d;">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  
	<div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="patienthome.php">Home</a>
  <a href="puniquereports.php"> Reports</a>
  <a href="viewdoctors.php">Doctors</a>
  <a href="viewpharmacy.php">Pharmacies</a>
  <a href="#">appointments</a>
  <a href="#">Contact Support</a>
</div>
<div class="up"><button class="openbtn" onclick="openNav()">☰ Patient Menu</button> </div>
<br>

<div class="divL">

    <h1 align="center" style="color: white;">Pharmacies</h1>
  <div class="divpatient">

  <form  method="post">
   
    <input type="text" id="patientID" name="search" placeholder="Enter the city name or pharmacy name to see the results.."style="width: 500px;">
    <input type="submit" value="Search" name="submit" style="width:100px;">
  </form>
  </div>

  <div class ="container my-5">
    <table class="table">
       <?php
       if (isset($_POST['submit'])){
        $search=$_POST['search'];
        $sql="Select * from `pharmacy` where Name like '%$search%' or Address like '%$search%'";
        $result=mysqli_query($con,$sql);
        if($result){
          if (mysqli_num_rows($result)>0){
            echo '<thead>
            <tr>
<th>Name</th>
<th>Contact Number</th>
<th>Address</th>
<th>Fax</th>
<th>Email</th>
<th>Web</th>
</tr></thead>
            ';

           while( $row=mysqli_fetch_assoc($result)){
           
            echo' <tbody>
            
            <tr>
              <td>'.$row['Name'].'</td>
              <td>'.$row['Lnumber'].'</td>
              <td>'.$row['Address'].'</td>
              <td>'.$row['Fax'].'</td>
              <td>'.$row['Email'].'</td>
              <td>'.$row['Web'].'</td>  
			  
            </tr>

            </tbody>
            ';

           }
          }
          else{
            echo '<h2>Invalid Name</h2>';
          }
        }

       }
       ?>
    </table>



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