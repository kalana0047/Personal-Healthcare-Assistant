<?php
session_start();

if(!isset($_SESSION["NIC"]))
{
	header("location:index.php");
}

?>

<?php include 'labreportslogic.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="patientregister.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
</head>
<body style="background: rgb(22,194,213);
background: linear-gradient(90deg, rgba(22,194,213,1) 54%, rgba(16,33,125,1) 97%);color: #10217d;">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  
	<div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="labhome.php">Home</a>
  <a href="labreports.php">Reports </a>
  <a href="Lreportsearch.php">Reports search</a>
  <a href="labupload.php">Report Upload/a>
  <a href="#">Contact Us</a>
  <a href="logout.php">Log Out</a>
</div>
<div class="up"><button class="openbtn" onclick="openNav()">☰ Lab Menu</button></div>
<br>

<div class="divL" style="margin-left: 0%;">

    <h1 align="center" style="color: white;">Laboratory Reports</h1><br><br>
    <a href="Lreportsearch.php" style="text-decoration:none; margin left:10px;"><button class = 'btn btn-danger' >Search <i class="fa fa-search"></i></button></a><br><br>


<div class="container">

<table class="table table-dark table-hover">
<thead>
<th >Report ID</th>
<th >Patient NIC</th>
<th >Lab name</th>
<th >Type</th>
<th >Report</th>
<th >date</th>
<th >Download</th>
<th >Delete</th>



</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['Pnic']; ?></td>
      <td><?php echo $file['labname']; ?></td>
      <td><?php echo $file['type']; ?></td>
      <td><?php echo $file['date']; ?></td>
      <td><?php echo $file['report']; ?></td>
      <td><a href="labreports.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
      <td><a href="labreportsdelete.php?id=<?php echo $file['id'] ?>" class = 'btn btn-danger'>Delete</a></td>
      
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