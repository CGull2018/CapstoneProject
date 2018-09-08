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
      <li><a href="Instructions.php">Instructions</a></li>
      <li><a href="Ingredients.php">Ingredients</a></li>
      <li><a href="Recipes.php">Recipes</a></li>

    </ul>
  </div>

<!--Application Overview-->
<div class="container-fluid">
<div class="row">
    <div class="panel panel-Success">
<h1>Application Overview</h1>
  </div>
  <div class="panel panel-Success">
<p>The vision for this Capstone Application was to create a project that could be
  useful for everyday purposes.
  In this case, an inventory application has been created to store the ingredients
  and recipes that a current user has in their possession.
  Since mobile devices almost always have a connection to the internet,
  the user could always be updating and accessing their list of ingredients
   and recipes from their mobile device. </p>

<p>Overall, this application is a great way to use all of the steps of the Software Development
Life Cycle in practice. An idea and design must first be created while keeping small parameters in mind.
Followed, a development enviorment must be set up. All of the project features must be programmed and created.
In the end, testing must be done to have a functioning application.</p>

</div>
</div>
</div>


  <div class="container-fluid">
  <div class="row">
  <div class="panel col-lg-6 col-sm-6">
    <div class="panel panel-Success">
      <div class="panel-heading">Completed

  <div class="panel-body">

    <ul>Items accomplished through Week 5
      <li>Since the skeleton of the application was completed in Module 04,
      Module 05 consisted of testing and making minor details. </li>
      <li></li>
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
