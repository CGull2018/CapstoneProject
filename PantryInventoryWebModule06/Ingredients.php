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


    <title>Pantry Ingredients</title>

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
      <li class="active"><a href="Ingredients.php">Ingredients</a></li>
      <li><a href="Recipes.php">Recipes</a></li>

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
        <h1><u>Ingredient Input Form</u></h1>
</div>
        <form action="NewIngredient.php" method="POST">
         <div class="form-group">
           <label for="Type">Ingredient Department:</label>
           <input type="text" class="form-control" name="Type" required>
         </div>
         <div class="form-group">
           <label for="Name">Ingredient Name:</label>
           <input type="text" class="form-control" name="Name" required>
         </div>
         <div>
         <label for="Brand">Ingredient Brand:</label>
         <input type="text" class="form-control" name="Brand" required>
       </div>
       <div class="form-group">
         <label for="Quantity">Ingredient Quantity:</label>
         <input type="text" class="form-control" name="Quantity" required>
       </div>
         <button type="submit" class="btn btn-default">Submit</button>
       </form>

</div>
</div>
<!--Retrun Current Ingredients-->
  <div class="grid col-lg-6 col-sm-6">
    <div class="panel panel-Warning">
      <div class="panel-heading">
      <h1><u>Current Ingredients</u></h1>
    </div>
    <div class="panel-body" style="overflow-y: scroll; height: 300px">

    <?php
     include 'DatabaseConfigure.php';
     include 'OpenDatabase.php';

     $sql = "SELECT `Type`, `Name`,`Quantity`  FROM `ingredients`";
          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "Type: " . $row["Type"]. "</br>" ;
                echo "Name: " . $row["Name"]. "</br>" ;
                echo "Quantity Remaining: " . $row["Quantity"]. "<br><hr>";
            }
          } else {
            echo "0 results but connected";
          }

          mysqli_close($conn);
  ?>
</div>

    </div>
  </div>
    <div class="grid col-lg-5 col-sm-5">
      <div class="panel panel-Warning">
        <div class="panel-Footer">
        <h1><u>List Filters</u></h1>
        <div class="container-fluid">
          <div class="navbar-header">
          </div>
          <ul class="nav nav-tabs">
            <li><a href="List.php">Filter Buttons</a></li>


          </ul>
        </div>
    </div>
  </div>


  </div>

</div>
  <!--Footer-->
  <div class="container-fluid">
  <div class="row">
  <div class="panel panel-Warning col-lg-12 col-sm-12">
  <div class="panel-footer"> Ingredients Page (Capstone Course Project)
  <?php  echo "Today is " . date("d/m/Y") . "<br>";?>
  </div>

</div>
</div>
  </body>
</html>
