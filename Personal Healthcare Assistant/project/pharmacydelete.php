<?php
include 'config.php';
 $ID = $_GET['Rnumber'];
mysqli_query($con,"DELETE FROM `pharmacy` WHERE  Rnumber=$ID");

header('location:pharmacy.php');

?>