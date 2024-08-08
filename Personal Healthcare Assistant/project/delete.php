<?php
include 'config.php';
 $ID = $_GET['NIC'];
mysqli_query($con,"DELETE FROM `patients` WHERE NIC=$ID");

header('location:patients.php');

?>