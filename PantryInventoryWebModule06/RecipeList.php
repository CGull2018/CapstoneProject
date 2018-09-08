<?php
  session_start();
  include 'DatabaseConfigure.php';
  include 'OpenDatabase.php';
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
      <li><a href="Instructions.php">Instructions</a> </li>
      <li><a href="Ingredients.php">Ingredients</a></li>
      <li><a href="Recipes.php">Recipes</a></li>

    </ul>
  </div>

</nav>
<!--Body 3 column-->
<!--Column 1-->

  <div class="container-fluid">
    <div class="row">
      <div class="grid col-lg-6 col-sm-6">
        <div class="panel panel-Success">
          <div class="panel-heading">
            <h1>Ingredient View Filter </h1>
          </div>
          <div class="panel-body" style="overflow-y: scroll; height: 400px">
            <?php
            $ID = $_POST['ID'];
            $sqli = "SELECT * FROM `recipeingredients` WHERE ID = $ID";
            $result = mysqli_query($conn, $sqli);

                 if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "ID Number: " . $row["ID"]. "</br>" ;
                            echo "Recipe Name: ". $row["Name"]. "</br><hr>";
                            echo "INGREDIENT: " . $row["Ingredient_1"];
                            echo "  QUANTITY: " . $row["Ingredient_1_Quantity"]. "</br>";
                            echo "INGREDIENT: " . $row["Ingredient_2"];
                            echo "  QUANTITY: " . $row["Ingredient_2_Quantity"]. "</br>";
                            echo "INGREDIENT: " . $row["Ingredient_3"];
                            echo "  QUANTITY: " . $row["Ingredient_3_Quantity"]. "</br>";
                            echo "INGREDIENT: " . $row["Ingredient_4"];
                            echo "  QUANTITY: " . $row["Ingredient_4_Quantity"];
                          }
                } else {
              echo "0 Items in List";
            }

            ?>
  </div>
          </div>
</div>


              <div class="grid col-lg-6 col-sm-6">
                <div class="panel panel-Success">
                  <div class="panel-heading">
                    <h1>1 or Less: Filter on all Ingredients</h1>
                  </div>
                  <div class="panel-body" style="overflow-y: scroll; height: 400px">
                    <?php
                    $sqli = "SELECT * FROM `ingredients` WHERE Quantity <= 1 ";
                    $result = mysqli_query($conn, $sqli);

                         if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "Type: " . $row["Type"]. "</br>" ;
                                    echo "Brand: ". $row["Brand"]. "</br>";
                                    echo "Name: " . $row["Name"]. "</br>" ;
                                    echo "Quantity Remaining: " . $row["Quantity"]. "<br><hr>";
                              }
                        } else {
                      echo "0 Items in List";
                    }
                    ?>
                  </div>
                </div>
              </div>

</div>
</div>

  <!--Footer-->
  <div class="container-fluid">
  <div class="row">
  <div class="panel panel-Warning col-lg-12 col-sm-12">
  <div class="panel-footer">Recipe List Page (Capstone Course Project)
  <?php  echo "Today is " . date("d/m/Y") . "<br>";?>
   </div>

</div>
</div>

  </body>
</html>
