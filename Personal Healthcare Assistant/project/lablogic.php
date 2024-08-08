<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'group44');


$sql = "SELECT * FROM `laboratory`";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Uploads files
if (isset($_POST['upload'])) { // if save button on the form is clicked

   
    $Rnumber= $_POST['Rnumber'];
    $Name = $_POST['Name'];
    $Haddress = $_POST['address'];
    $mnumber = $_POST['mnumber'];
    $cpnumber = $_POST['cpnumber'];
    $Fax = $_POST['Fax'];
    $Email = $_POST['Email'];
    $Web = $_POST['web'];

    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'lab/' . $filename;

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
            $sql = "INSERT INTO `laboratory`(`Rnumber`, `Name`, `Address`, `pnumber`, `Lnumber`, `Fax`, `Email`, `Web`, `Identity`) VALUES ('$Rnumber','$Name','$Haddress','$mnumber','$cpnumber','$Fax','$Email','$Web','$filename')";
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

    $NIC = $_POST['LabID'];
    $uname = $_POST['username'];
    $pwd = $_POST['password'];
    $utype = "Laboratory";

    // insert data

    mysqli_query($conn,"INSERT INTO `login`(`NIC`, `username`, `password`, `usertype`) VALUES ('$NIC','$uname','$pwd','$utype')");
    header("location:labR.php");

}


// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM `laboratory` WHERE Rnumber=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'lab/' . $file['Identity'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('lab/' . $file['Identity']));
        readfile('lab/' . $file['Identity']);

    }

}

?>
