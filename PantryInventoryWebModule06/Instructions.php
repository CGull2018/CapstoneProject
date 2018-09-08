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
<nav>

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
  </nav>
<!--Body 3 column-->
<!--Column 1-->

  <div class="container-fluid">
    <div class="row">
      <div class="grid col-lg-4 col-sm-4">
        <div class="panel panel-Success">
          <div class="panel-heading">
            <h1><u>Input Ingredients</u> </h1>
          </div>
          <div class="panel-body" style="overflow-y: scroll; height: 400px">
            <p>By inputing ingredients into this form, they will be directed to the SQL database. Currently each ingredient
               has 4 input values to be entered (These are required). The department for where this item can be found at the grocery store, the name
               of the item, the manufacture brand, and the amount that is avaliable. After completing each input and submitting
               a new data object will be created. With the ingredients, also comes a list filter. Currenlty this brings a new Page
              that has 3 predetermined SQL Querys in place to sort the ingredients. </p>
              <ul>
                <li>Alphabetical Sort</li>
                <li>Quantity Sort</li>
                <li>2 or Less Remaining</li>
              </ul>

          </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="grid col-lg-4 col-sm-4">
            <div class="panel panel-Success">
              <div class="panel-heading">
                <h1><u>Input Recipes</u> </h1>

              </div>
              <div class="panel-body" style="overflow-y: scroll; height: 400px">
                <p>Similar to the ingredient page, the recipes page allows the user to enter in multiple ingredients as well as a
                name to a recipe. This is then saved into the recipe database, for future viewing through the "View Ingredient" box. Like
              the ingredient page, the user must specify how many ingredients are going to be in the recipe (required). By giving the recipe a name,
            followed by the ingrendients and a quantity, that recipe will be saved into the database. </p>

              </div>
            </div>
          </div>

          <div class="container-fluid">
            <div class="row">
              <div class="grid col-lg-4 col-sm-4">
                <div class="panel panel-Success">
                  <div class="panel-heading">
                    <h1><u>Sign Out</u></h1>

                  </div>
                  <div class="panel-body" style="overflow-y: scroll; height: 400px">
                    <p> Like all other applications a logout/ signout screen is generaly always requested, by users.
                  Currently the feature of the logout button on each page
                  clears the active user from the current session, as well as links the application to the login screen. From here,
                the user must either create a new login, or use one that has already been established to get back to application features. </p>

                  </div>
                </div>
              </div>


  <!--Footer-->
  <div class="container-fluid">
  <div class="row">
  <div class="panel panel-Warning col-lg-12 col-sm-12">
  <div class="panel-footer"> Instructions Page (Capstone Course Project)
  <?php  echo "Today is " . date("d/m/Y") . "<br>";?>
  </div>

</div>
</div>

  </body>
</html>
