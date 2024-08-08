


<?php
include 'config.php';
$ID = $_GET['id'];
mysqli_query($con,"DELETE FROM `reports` WHERE id=$ID");

header('location:labreports.php');

?>