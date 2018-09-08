
<?php
//create a log out button
session_start();
session_destroy();
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">

    <title>PantryInventory</title>
  </head>
  <body>
    <!--Header with Logo-->
<div class="container">
  <div class="row">
<div class="panel panel-header col-lg-8 col-sm-8">
  <h1>Pantry Inventory Solutions </h1>
  <?php
  echo "Today is " . date("d/m/Y") . "<br>";
if(isset($_SESSION['ID'])){
  echo "Current User Signed In:   " .$_SESSION['UserName'];
  echo "</br>User ID Number:   " . $_SESSION['ID'];
}
  else {
  echo "No Current User is Signed In!";
}
   ?>


</div>
<div class="panel panel-header col-lg-4 col-sm-4">
  <img src="M01Logo.png" class="img-responsive">
</div>
  </div>
</div>

  <div class="container-fluid">
  <div class="row">
  <div class="panel">
    <div class="panel panel-Success">
      <div class="panel-heading">LogOut Completed

  <div class="panel-body">

<p>You have been successfully logged out from the Pantry Inventory Solutions application.</p>
<p>To log in, please navigate to the user log in to either create a new user or log in with existing
  credentials.</p>

  <ul class="nav nav-pills">
    <li><a href="Login.php"> User Login</a></li>
    <li><a href="CreateUser.php">Create User</a></li>
  </ul>
  </div>
</div>
</div>
</div>

</div>
</div>


  <!--Footer-->
  <div class="container-fluid">
  <div class="row">
  <div class="panel panel-Warning col-lg-12 col-sm-12">
  <div class="panel-footer"> Logout Page (Capstone Course Project) </div>

</div>
</div>

  </body>
</html>
