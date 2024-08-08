<?php
// include db connection
include 'config.php';
if(isset($_POST['Update'])){


    $Rnumber= $_POST['Rnumber'];
    $Name = $_POST['Name'];
    $Haddress = $_POST['address'];
    $mnumber = $_POST['mnumber'];
    $cpnumber = $_POST['cpnumber'];
    $Fax = $_POST['Fax'];
    $Email = $_POST['Email'];
    $Web = $_POST['web'];

    // insert data

    mysqli_query($con,"UPDATE `laboratory` SET `Rnumber`='$Rnumber',`Name`='$Name',`Address`='$Haddress',`pnumber`='$mnumber',`Lnumber`='$cpnumber',`Fax`='$Fax',`Email`='$Email',`Web`='$Web' WHERE Rnumber=$Rnumber");
    header("location:lab.php");

}