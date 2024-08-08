<?php
// include db connection
include 'config.php';
if(isset($_POST['update'])){


    $NIC = $_POST['NIC'];
    $Fname = $_POST['firstname'];
    $Lname = $_POST['lastname'];
    $Bday = $_POST['bday'];
    $Mstatus = $_POST['maritialstatus'];
    $Ldiseases = $_POST['diseases'];
    $allergies = $_POST['al'];
    $Htown = $_POST['hometown'];
    $Haddress = $_POST['address'];
    $mnumber = $_POST['mnumber'];
    $cpnumber = $_POST['cpnumber'];
    $Email = $_POST['Email'];
    $Fdoctor = $_POST['fdoctor'];


    // insert data

    mysqli_query($con,"UPDATE `patients` SET `NIC`='$NIC',`Fname`='$Fname',`Lname`='$Lname',`Bday`='$Bday',`MaritialStatus`='$Mstatus',`Diseases`='$Ldiseases',`Allergies`='$allergies',`HomeTown`='$Htown',`HomeAddress`='$Haddress',`Pnumber`='$mnumber',`Lnumber`='$cpnumber',`Email`='$Email',`Fdoctor`='$Fdoctor' WHERE NIC=$NIC");
    header("location:patients.php");

}