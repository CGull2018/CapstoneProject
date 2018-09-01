<?php
//create a new user in database
  session_start();
include 'DatabaseConfigure.php';
include 'OpenDatabase.php';

//Get variables from create user inputs
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$UserName = $_POST['UserName'];
$Password = $_POST['Password'];

$sqli = "INSERT INTO users (FirstName, LastName, UserName, Password)
VALUES ('$FirstName','$LastName','$UserName','$Password')";

$result = mysqli_query($conn, $sqli);

header("Location: Login.php");

?>
