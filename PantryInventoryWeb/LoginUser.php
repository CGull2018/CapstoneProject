<?php
session_start();
include 'DatabaseConfigure.php';
include 'OpenDatabase.php';

//Get variables from user inputs
$UserName = $_POST['UserName'];
$Password = $_POST['Password'];

$sqli = "SELECT * FROM users WHERE UserName ='$UserName'
AND Password = '$Password'";
$result = mysqli_query($conn, $sqli);

if(!$row=mysqli_fetch_assoc($result)){
    echo "Incorrect UserName or Password.";
    header("Location: Login.php");

}else {
$_SESSION['ID'] = $row['ID'];
$_SESSION['UserName'] = $row['UserName'];

header("Location: MainPage.php");

}

?>
