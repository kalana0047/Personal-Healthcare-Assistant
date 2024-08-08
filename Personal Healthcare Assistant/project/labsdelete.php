<?php
include 'config.php';
 $ID = $_GET['Rnumber'];
mysqli_query($con,"DELETE FROM `laboratory` WHERE  Rnumber=$ID");

header('location:lab.php');

?>