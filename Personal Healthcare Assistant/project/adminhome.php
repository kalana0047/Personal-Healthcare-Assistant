<?php
session_start();

if(!isset($_SESSION["NIC"]))
{
	header("location:index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>adminhome</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body style="background: rgb(22,194,213);
background: linear-gradient(148deg, rgba(22,194,213,1) 32%, rgba(137,222,226,1) 47%, rgba(16,33,125,1) 71%);"> 

    
<div class="wrapper">
    <div class="sidebar">
        
        <ul>
            <li><a href="#"><i class="fas fa-user"></i><?php echo $_SESSION["NIC"] ?></a></li>
            <li><a href="#"><i class=""></i></a></li>
            <li><a href="#"><i class="fas fa-home"></i>HOME</a></li>
            <li><a href="patients.php"><i class="fas fa-project-diagram"></i>Patients</a></li>
            <li><a href="doctors.php"><i class="fas fa-project-diagram"></i>Doctors</a></li>
            <li><a href="pharmacy.php"><i class="fas fa-project-diagram"></i>Pharmacies</a></li>
            <li><a href="lab.php"><i class="fas fa-project-diagram"></i>Laboratories</a></li>
            <li><a href="logout.php"><i class="fas fa-user"></i>Logout</a></li>      
        </ul> 
        <div class="social_media">
         
      </div>
    </div>

    
    <div class="main_content">
        <div class="topnav">
            
          </div>
          <br>
        <h1 style="color:white;">ADMIN MENU</h1>
        <br>
        
          <div class="flex-container">
          <a href="patientR.php">
            <div class="flex-box">
            
                Patient registration<br>
                <img class="pictures" src="images/download (10).png" alt=" doctor" width="150" height="150">
            </div>
        </a>
            <a href="pharmacyR.php">        
            <div class="flex-box">
                Pharmacy registration<br>
                <img class="pictures" src="images/images (1).jpeg" alt=" hospital" width="150" height="150">

            </div> 
            </a>

            <div class="flex-container">
                
            <a href="labR.php">   
            <div class="flex-box">
               Laboratory registration <br>
                <img class="pictures" src="images/download (13).png" alt=" reports" width="150" height="150">
            </div> 
            </a> 
            <a href="doctorR.php">   
            <div class="flex-box">
                Doctor registration<br>
                <img class="pictures" src="images/doctor reg.png" alt=" Prescription" width="150" height="150">
            </div>
            </a> 

            

        </div>
    </div>

    
</div>

</body>
</html>