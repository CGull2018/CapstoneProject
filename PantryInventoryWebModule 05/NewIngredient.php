<?php
//create a new user in database
  session_start();
include 'DatabaseConfigure.php';
include 'OpenDatabase.php';

//Get variables from create user inputs
$Type = $_POST['Type'];
$Name = $_POST['Name'];
$Brand = $_POST['Brand'];
$Quantity = $_POST['Quantity'];

$sqli = "INSERT INTO ingredients (Type, Name, Brand, Quantity)
VALUES ('$Type','$Name','$Brand','$Quantity')";

$result = mysqli_query($conn, $sqli);

header("Location: Ingredients.php");

?>
