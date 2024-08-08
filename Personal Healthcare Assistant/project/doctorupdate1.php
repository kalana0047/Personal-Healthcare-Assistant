<?php
// include db connection
include 'config.php';
if(isset($_POST['update'])){

    $NIC = $_POST['NIC'];
    $Fname = $_POST['firstname'];
    $Lname = $_POST['lastname'];
    $Bday = $_POST['bday'];
    $Mstatus = $_POST['maritialstatus'];
    $Htown = $_POST['hometown'];
    $Haddress = $_POST['address'];
    $mnumber = $_POST['mnumber'];
    $cpnumber = $_POST['cpnumber'];
    $Email = $_POST['Email'];


    // insert data

    mysqli_query($con,"UPDATE `doctors` SET `NIC`='$NIC',`Fname`='$Fname',`Lname`='$Lname',`Bday`='$Bday',`MaritialStatus`='$Mstatus',`HomeTown`='$Htown',`HomeAddress`='$Haddress',`Pnumber`='$mnumber',`Lnumber`='$cpnumber',`Email`='$Email' WHERE NIC =$NIC ");
    header("location:Doctors.php");

}