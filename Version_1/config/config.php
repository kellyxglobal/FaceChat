<?php  
ob_start(); //
session_start();

$timezne = date_default_timezone_set("Africa/Accra");
$con = mysqli_connect("localhost", "root", "", "social"); //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>