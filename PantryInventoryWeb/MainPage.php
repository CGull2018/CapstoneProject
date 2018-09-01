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

    <title>PantryInventory</title>
  </head>
  <body>
    <!--Header with Logo-->
<div class="container">
  <div class="row">
<div class="panel panel-header col-lg-8 col-sm-8">
  <h1>Pantry Inventory Solutions Home</h1>
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
      <li><a href="Login.php"> User Login</a></li>
      <li><a href="CreateUser.php">Create User</a></li>
      <li><a href="Instructions.php">Instructions</a></li>
      <li><a href="Ingredients.php">Ingredients</a></li>
      <li><a href="Recipes.php">Recipes</a></li>

    </ul>
  </div>
  <div class="container-fluid">
  <div class="row">
  <div class="panel col-lg-6 col-sm-6">
    <div class="panel panel-Success">
      <div class="panel-heading">Completed

  <div class="panel-body">

    <ul>Items accomplished through Week 4
      <li>Created ALL pages for application</li>
      <li>Continued SQL for data from database to applicaiton</li>
      <li>Created a user logout page</li>
      <li>Created a recipe page that can enter in new recipes, as well as view by ingredients using
          SQL criteria</li>
    </ul>
  </div>
</div>
</div>
</div>

  <!--column 2-->
  <div class="panel col-lg-6 col-sm-6">
    <div class="panel panel-Success">
      <div class="panel-heading">Work in Progress


  <div class="panel-body">

    <ul>Items yet to be accomplished.
      <li>Add additional styling, images, and logos.</li>
      <li>Create additional php conditional statements to all page.</li>
      <li>Follow up on Course Project Requirements.</li>
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
  <div class="panel-footer"> Main Page (Capstone Course Project) </div>

</div>
</div>

  </body>
</html>
