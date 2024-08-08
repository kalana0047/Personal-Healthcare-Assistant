<?php

$host="localhost";
$user="root";
$password="";
$db="group44";

session_start();


$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
	die("connection error");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];
	$NIC = $_POST["NIC"];

	$sql="select * from login where NIC='".$NIC."' AND password='".$password."' ";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);

	if($row["usertype"]=="doctor")
	{	

		$_SESSION["NIC"]=$NIC;

		header("location:doctorhome.php");
	}

	elseif($row["usertype"]=="admin")
	{

		$_SESSION["NIC"]=$NIC;
		
		header("location:adminhome.php");
	}
	elseif($row["usertype"]=="patient")
	{

		$_SESSION["NIC"]=$NIC;
		
		header("location:patienthome.php");
	}
	elseif($row["usertype"]=="pharmacy")
	{

		$_SESSION["NIC"]=$NIC;
		
		header("location:pharmacyhome.php");
	}
	elseif($row["usertype"]=="Laboratory")
	{

		$_SESSION["NIC"]=$NIC;
		
		header("location:labhome.php");
	}

	else
	{
		echo "username or password incorrect";
	}

}




?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="main.css">
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body style="background: rgb(16,33,125);
background: linear-gradient(90deg, rgba(16,33,125,1) 41%, rgba(22,194,213,1) 77%);">
    
        <section align="center">
        <div class="container">
            <div class="user singinBx">
                <div class="imgBx"><img src="logo2.jpeg" width="100%" height="100%" alt=""class="animate__animated animate__pulse animate__infinite"></div>
                <div class="formBx">
                    <form action="#" method="post">
                        <h2 class="animate__animated animate__pulse animate__infinite">Login</h2>
                        <input type="text" name="NIC" placeholder="ID Number">
                        <input type="password" name="password" placeholder="Password">
                        <input type="Submit" name="" value="Login">
                        <p class="signup">Don't have an account ?<a href="select_sign.html">
                            Sign Up</a></p>
                    </form>
                </div>
            </div>
 
        </div>
    </section>

    
</body>
</html>