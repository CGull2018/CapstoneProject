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
      <a class="navbar-brand" href="MainPage.php">Pantry Inventory Solutions Home</a>
    </div>
    <ul class="nav nav-tabs">
      <li class="active"><a href="Instructions.php">Instructions</a></li>
      <li><a href="Ingredients.php">Ingredients</a></li>
      <li><a href="Recipes.php">Recipes</a></li>

    </ul>
  </div>
<!--Body 3 column-->
<!--Column 1-->

  <div class="container-fluid">
    <div class="row">
      <div class="grid col-lg-4 col-sm-4">
        <div class="panel panel-Success">
          <div class="panel-heading">
            <h1>Input Ingredients </h1>
          </div>
          <div class="panel-body">
            <p>By inputing ingredients into this form, they will be directed to the SQL database. Currently each ingredient
               has 4 input values to be entered. The department for where this item can be found at the grocery store, the name
               of the item, the manufacture brand, and the amount that is avaliable. After completing each input and submitting
               a new data object will be created. With the ingredients, also comes a list filter. Currenlty this brings a new Page
              that has 3 predetermined SQL Querys in place to sort the ingredients.</p>

          </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="grid col-lg-4 col-sm-4">
            <div class="panel panel-Success">
              <div class="panel-heading">
                <h1>Input Recipes </h1>

              </div>
              <div class="panel-body">
                <p>While this page will be completed during the module 04 course project, the vision for the recipes page will
                be similar to that of ingredients. A form will take in the necessary ingredients that go into making it, as well as
              the quantity of each Ingredient. </p>

              </div>
            </div>
          </div>

          <div class="container-fluid">
            <div class="row">
              <div class="grid col-lg-4 col-sm-4">
                <div class="panel panel-Success">
                  <div class="panel-heading">
                    <h1>Sign Out</h1>

                  </div>
                  <div class="panel-body">
                    <p>Although this item was supposed to be part of the module 04 content, the reference that i was using
                    to program in a log in also included a log out. Currently the feature of the logout button on each page
                  clears the active user from the current session, as well as links the application to the login screen. From here,
                the user must either create a new login, or use one that has already been established to get back to application features. </p>

                  </div>
                </div>
              </div>


  <!--Footer-->
  <div class="container-fluid">
  <div class="row">
  <div class="panel panel-Warning col-lg-12 col-sm-12">
  <div class="panel-footer"> Instructions Page (Capstone Course Project) </div>

</div>
</div>

  </body>
</html>
