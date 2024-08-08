<?php
include 'config.php';
 $ID = $_GET['NIC'];
mysqli_query($con,"DELETE FROM `doctors` WHERE NIC=$ID");

header('location:doctors.php');

?>