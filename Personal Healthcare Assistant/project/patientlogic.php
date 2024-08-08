<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'group44');


$sql = "SELECT * FROM `patients`";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Uploads files
if (isset($_POST['upload'])) { // if save button on the form is clicked

 
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


    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'patients/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO `patients`(`NIC`, `Fname`, `Lname`, `Bday`, `MaritialStatus`, `Diseases`, `Allergies`, `HomeTown`, `HomeAddress`, `Pnumber`, `Lnumber`, `Email`, `Fdoctor`, `Identity`) VALUES ('$NIC','$Fname','$Lname','$Bday','$Mstatus','$Ldiseases','$allergies','$Htown','$Haddress','$mnumber','$cpnumber','$Email','$Fdoctor','$filename')";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}



// create account

if(isset($_POST['createaccount'])){

    $NIC = $_POST['NIC'];
    $uname = $_POST['username'];
    $pwd = $_POST['password'];
    $utype = "patient";

    // insert data

    mysqli_query($conn,"INSERT INTO `login`(`NIC`, `username`, `password`, `usertype`) VALUES ('$NIC','$uname','$pwd','$utype')");
    header("location:patientR.php");

}


// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM `patients` WHERE NIC=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'Patients/' . $file['Identity'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('patients/' . $file['Identity']));
        readfile('patients/' . $file['Identity']);

    }

}

?>
