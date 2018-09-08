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

    <title>Pantry Recipes</title>

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
      <li><a href="Instructions.php">Instructions</a></li>
      <li><a href="Ingredients.php">Ingredients</a></li>
      <li class="active"><a href="Recipes.php">Recipes</a></li>

    </ul>
  </div>

</nav>

<!--Body-->

<!-- Create User Login-->
<div class="container-fluid">
  <div class="row">
    <div class="grid col-lg-6 col-sm-6">
      <div class="panel panel-Warning">
        <div class="panel-heading">
        <h1><u>Recipes Input Form</u></h1>
</div>
        <form class="form-inline" action="NewRecipe.php" method="POST">
          <div class="form-group">
            <label>Number of Ingredients to Enter: </label>
            <input type="text" class="form-control" name="Number" required>
          </div>
          <!--Name Input-->
         <div class="form-group">
           <label>Recipe Name:</label>
           <input type="text" class="form-control" name="Name">
         </div>
         <!--input 1-->
         <div class="form-group">
           <label>Ingredient 1:</label>
           <input type="text" class="form-control" name="Ingredient_1"placeholder="Ingredient 1">
           <label>Quantity:</label>
           <input type="text" class="form-control" name="Ingredient_1_Quantity" placeholder="0">
         </div>

         <!--input 2-->
         <div class="form-group">
         <label>Ingredient 2:</label>
         <input type="text" class="form-control" name="Ingredient_2" placeholder="Ingredient 2">
         <label>Quantity:</label>
         <input type="text" class="form-control" name="Ingredient_2_Quantity" placeholder="0">
        </div>

        <!--input 3-->
       <div class="form-group">
         <label>Ingredient 3:</label>
         <input type="text" class="form-control" name="Ingredient_3" placeholder="Ingredient 3">
         <label>Quantity:</label>
         <input type="text" class="form-control" name="Ingredient_3_Quantity" placeholder="0">
      </div>

      <!--input 4-->
      <div class="form-group">
         <label>Ingredient 4:</label>
         <input type="text" class="form-control" name="Ingredient_4" placeholder="Ingredient 4">
         <label>Quantity:</label>
         <input type="text" class="form-control" name="Ingredient_4_Quantity" placeholder="0">
       </div>

         <button type="submit" class="btn btn-default">Submit</button>
       </form>

</div>
</div>
<!--Retrun Current Ingredients-->
  <div class="grid col-lg-6 col-sm-6">
    <div class="panel panel-Warning">
      <div class="panel-heading">
      <h1><u>Current Recipes</u></h1>
    </div>
    <div class="panel-body" style="overflow-y: scroll; height: 300px">

    <?php
     include 'DatabaseConfigure.php';
     include 'OpenDatabase.php';

     $sql = "SELECT `Name`, `ID` FROM `recipeingredients` ORDER BY Name Asc";
          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "ID Number: " . $row["ID"]. "</br>" ;
                echo "Name: " . $row["Name"]. "</br>" ;
            }
          } else {
            echo "0 results: Connected to Database";
          }

          mysqli_close($conn);
  ?>
</div>

    </div>
  </div>


  <!--Identify Ingredients Page:-->
    <div class="grid col-lg-6 col-sm-6">
      <div class="panel panel-Warning">
        <div class="panel-Footer">
        <h1><u>View Ingredients</u></h1>
      </div>
<form class="form-inline" action="RecipeList.php" method="post">
  <div class="form-group">
    <label>Number the ID number of the Recipe to find Ingredients for: </label>
    <input type="text" class="form-control" name="ID" required>
  </div>
         <button type="submit" class="btn btn-default">Submit</button>
</form>
    </div>
  </div>


  </div>

</div>
  <!--Footer-->
  <div class="container-fluid">
  <div class="row">
  <div class="panel panel-Warning col-lg-12 col-sm-12">
  <div class="panel-footer"> Recipe Page (Capstone Course Project)
  <?php  echo "Today is " . date("d/m/Y") . "<br>";?>
   </div>

</div>
</div>
  </body>
</html>
