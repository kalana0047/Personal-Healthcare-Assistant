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
	<title></title>
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body style="background: rgb(16,33,125);
background: linear-gradient(90deg, rgba(16,33,125,1) 41%, rgba(22,194,213,1) 77%);">

    
<div class="wrapper">
    <div class="sidebar">
        
        <ul>
            <li><a href="patientprofile.php"><i class="fas fa-user"></i><?php echo $_SESSION["NIC"] ?></a></li>
            <li><a href="#"><i class=""></i></a></li>
            <li><a href="#"><i class="fas fa-home" style="opacity:0.5;"></i>HOME</a></li>
            <li><a href="#"><i class="fas fa-blog"></i>Contact us</a></li>
            <li><a href="logout.php"><i class="fas fa-user"></i>Log Out</a></li>
            
        </ul> 
        <div class="social_media">
         
      </div>
    </div>

    
    <div class="main_content">
        <div class="topnav">
           
            
          </div>
          <br>
<h1 class="animate__animated animate__pulse animate__infinite" style="color:white;">Patient Home</h1>
<br>

          <div class="flex-container" >
            <a href="patientprofile.php">
            <div class="flex-box">
            
                Profile<br><div class="a1">
                <img class="pictures" src="images/download (14).png" alt=" doctor" width="150" height="150">
            </div>
</a>   
            </div>
            <a href="puniquereports.php">
            <div class="flex-box">
                View Reports<br>
                <img class="pictures" src="images/download (3).png" alt=" hospital" width="150" height="150">

            </div></a>
            <div class="flex-box">
                Clinic Dates<br>
                <img class="pictures" src="images/download (4).png" alt=" reports" width="150" height="150">
            </div>
            <a href="viewdoctors.php">
            <div class="flex-box">
                Search about doctors<br>
                <img class="pictures" src="images/search doctors.png" alt=" Prescription" width="150" height="150">
            </div></a>
            <a href="viewpharmacy.php">
            <div class="flex-box">
                Pharmacies near you<br>
                <img class="pictures" src="images/pharmacy near u.png" alt="box5" width="150" height="150">
            </div>
</a>
            <div class="flex-box">
                Contact support<br>
                <img class="pictures" src="images/download (6).png" alt=" box6" width="150" height="150">
            </div>

        </div>
    </div>

    
</div>

</body>
</html>