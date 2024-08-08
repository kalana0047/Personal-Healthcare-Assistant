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
	<title>Side Navigation Bar</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body style="background: rgb(22,194,213);
background: linear-gradient(148deg, rgba(22,194,213,1) 32%, rgba(137,222,226,1) 47%, rgba(16,33,125,1) 71%);">

    
<div class="wrapper">
    <div class="sidebar">
        <ul>
            <li><a href="labprofile.php"><i class="fas fa-user"></i><?php echo $_SESSION["NIC"] ?></a></li>
            <li><a href="#"><i class=""></i></a></li>
            <li><a href="labhome.php"><i class="fas fa-home"></i>HOME</a></li> 
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
<h1 style="color:white;">LABORATORY MENU</h1>
<br>

          <div class="flex-container">
          <a href="labprofile.php">
            <div class="flex-box">
                
            
                Profile<br>
                <img class="pictures" src="images/download (14).png" alt=" doctor" width="150" height="150">
            </div></a>
                
            <a href="labupload.php">
            <div class="flex-box">
                Report Upload<br>
                <img class="pictures" src="images/download (8).png" alt=" hospital" width="150" height="150">

            </div> 
</a>
            <div class="flex-container">
                
            <a href="labreports.php">    
            <div class="flex-box">
                Report View<br>
                <img class="pictures" src="images/download (3).png" alt=" reports" width="150" height="150">
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