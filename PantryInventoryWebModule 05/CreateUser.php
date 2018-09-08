<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">


    <title>Pantry Login</title>

  </head>
  <body>
    <!--Header with Logo-->
<div class="container">
  <div class="row">
<div class="panel panel-header col-lg-8 col-sm-8">
  <h1>Pantry Inventory Solutions</h1>
  <?php
if(isset($_SESSION['ID'])){
  echo "Current User Signed In:   " .$_SESSION['UserName'];
  echo "</br>User ID Number:   " . $_SESSION['ID'];
}else {
  echo "No Current User is Signed In!";
}
   ?>
<Form action="LogOut.php">
  <button> Log Out</button>
</Form>
</div>
<div class="panel panel-header col-lg-4 col-sm-4">
  <img src="M01Logo.png" class="img-responsive">
</div>
  </div>
</div>

<!--Navigation Bar-->

  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Pantry Inventory Solutions</a>
    </div>
    <ul class="nav nav-tabs">
      <li><a href="Login.php">User Login</a></li>

    </ul>
  </div>

<!--Body
Create User Name Variables-->
<div class="container-fluid">
  <div class="row">
    <div class="grid col-lg-7 col-sm-7">
      <div class="panel panel-Warning">
        <div class="panel-heading">
        <p>User Login form</p>

        <form action="NewUser.php" method="POST">
          <div class="form-group">
            <label>First Name:</label>
            <input type="text" class="form-control" name="FirstName" required>
          </div>
          <div class="form-group">
            <label>Last Name:</label>
            <input type="text" class="form-control" name="LastName" required>
          </div>
         <div class="form-group">
           <label>User Name:</label>
           <input type="text" class="form-control" name="UserName" required>
         </div>
         <div class="form-group">
           <label>Password:</label>
           <input type="password" class="form-control" name="Password" required>

           <button type="submit"> Create User</button>
         </div>

       </form>
        </div>
      </div>
    </div>



  </div>

</div>
  <!--Footer-->
  <div class="container-fluid">
  <div class="row">
  <div class="panel panel-Warning col-lg-12 col-sm-12">
  <div class="panel-footer"> Create User Page (Capstone Course Project) </div>

</div>
</div>
  </body>
</html>
