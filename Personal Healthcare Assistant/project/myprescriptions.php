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
background: linear-gradient(90deg, rgba(22,194,213,1) 51%, rgba(137,222,226,1) 75%, rgba(16,33,125,1) 91%);color: #10217d;color: #10217d;">
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

    <h1 align="center" style="color: white;"> Search My Prescriptions</h1>
  <div class="divpatient">

  <form  method="post">
   
    <input type="text" id="patientID" name="search" placeholder="Enter Patient ID Or Prescription ID.."style="width: 500px;">
    <input type="submit" value="Search" name="submit" style="width:100px;">
  </form>
  </div>

  <div class ="container my-5">
  <table class="table">
       <?php
       if (isset($_POST['submit'])){
        $search=$_POST['search'];
        $name=$_SESSION["NIC"];
        $sql="Select * from `prescriptions` where Pnic like '%$search%' and Dnic = '$name'";
        $result=mysqli_query($con,$sql);
        if($result){
          if (mysqli_num_rows($result)>0){
            echo '<thead>

            <tr>
<th>prescription ID</th>
<th>patient NIC</th>
<th>Doctor name</th>
<th>prescription</th>
<th>Time</th>
</tr></thead>
            ';

           while( $row=mysqli_fetch_assoc($result)){
           
            echo' <tbody>
            
            <tr>
              <td>'.$row['Pid'].'</td>
              <td>'.$row['Pnic'].'</td>
              <td>'.$row['Dnic'].'</td>
              <td>'.$row['Prescription'].'</td>
              <td>'.$row['Time'].'</td>
            </tr>

            </tbody>
            ';

           }
          }
          else{
            echo '<h2>data not found</h2>';
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