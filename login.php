<!DOCTYPE html>
<html>
<head>
<title>Data Entry Form</title>
<?php
    $servername = "mysql.cs.nott.ac.uk";
    $username = "psxzl8";
    $password = "19941217";
    $dbasename = "psxzl8";
    $conn = new mysqli($servername, $username, $password, $dbasename);
    if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    $pwd = $_POST["Password"];
    $stuid =  $_POST["StudentID"];
    echo $pwd;
    echo $stuid;
?>
</head>
