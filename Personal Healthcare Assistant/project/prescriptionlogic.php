
<?php

if(!isset($_SESSION["NIC"]))
{
	header("location:index.php");
}


$conn = mysqli_connect('localhost', 'root', '', 'group44');

$sql = "SELECT * FROM `prescriptions`";
$result = mysqli_query($conn, $sql);



if(isset($_POST['upload'])){

    $dt = date('Y-m-d H:i:s ');
    $Pnic = $_POST['patientID'];
    $pres = $_POST['prescription'];
    $Dnic =   $_SESSION["NIC"] ;
    $email= $_POST['email'];

    $name = $_SESSION["NIC"] ;
    $message= $_POST['prescription'];

    $to = "sajinadissanayake999@gmail.com";

    $subject = "Mail From website";
    $txt ="Name ". $Pnic. "\r\n  Email = " . $email . "\r\n Message =" . $message;
    $headers = "From: noreply@yoursite.com" . "\r\n" ."CC: somebodyelse@example.com";

    // insert data

    mysqli_query($conn,"INSERT INTO `prescriptions`( `Pnic`, `Dnic`, `Prescription`,`Time`) VALUES ('$Pnic','$Dnic','$pres','$dt')");
    header("location:prescription.php");

    if($email!=NULL){
        mail($to,$subject,$txt,$headers);
    }
    

}


?>
