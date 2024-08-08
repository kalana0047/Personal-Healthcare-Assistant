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
            <li><a href="doctorprofile.php "><i class="fas fa-user"></i><?php echo $_SESSION["NIC"] ?></a></li>
            <li><a href="#"><i class=""></i></a></li>
            <li><a href="doctorhome.php"><i class="fas fa-home"></i>HOME</a></li>
            <li><a href="#"><i class="fas fa-blog"></i>Contact Us</a></li>
            <li><a href="logout.php"><i class="fas fa-user"></i>Log Out</a></li>
            
        </ul> 
        <div class="social_media">
         
      </div>
    </div>

    
    <div class="main_content">
        <div class="topnav">
           
            
          </div>
          <br>
<h1 class="animate__animated animate__pulse animate__infinite" style="color:white;">DOCTOR MENU</h1>
<br>

          <div class="flex-container">
            <a href="doctorprofile.php">
            <div class="flex-box">
            
                Profile<br>
                <img class="pictures" src="images/download (14).png" alt=" doctor" width="150" height="150">
            </div></a>
                
            <div class="flex-box">
                Appoinments<br>
                <img class="pictures" src="images/download (4).png" alt=" hospital" width="150" height="150">

            </div> 
            <div class="flex-container">
                
            <a href="prescription.php">
            <div class="flex-box">
                Create prescription<br>
                <img class="pictures" src="images/images.png" alt=" reports" width="150" height="150">
            </div>   
            </a>
            <a href="myprescriptions.php">
            <div class="flex-box">
                My prescriptions<br>
                <img class="pictures" src="images/images.png" alt=" reports" width="150" height="150">
            </div>   
            </a>
            <div class="flex-box">
                Contact support <br>
                <img class="pictures" src="images/search doctors.png" alt=" Prescription" width="150" height="150">
            </div>
            

        </div>
    </div>

    
</div>

</body>
</html>