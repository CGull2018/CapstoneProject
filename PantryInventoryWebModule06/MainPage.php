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
<nav>
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
</nav>

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
      <div class="panel-heading"><strong>Completed</strong>

  <div class="panel-body" style="overflow-y: scroll; height: 125px">


    <ul>Items accomplished through Week 6
      <li>Module 06 is the last week of the Capstone Course. During this week,
      final touches were made to complete the application. Although there were other elements that
    could have been added to make this a more complete and univerasl project, the content that has been
  created is a great baseline. The main focus was on adding CSS elements. Features such as background gradient colors,
text fonts, borders, and more were incoprerated to make this application look closer to finished,
compared to the skeleton that it had been through the prevous weeks.</li>

    </ul>
  </div>
</div>
</div>
</div>

  <!--column 2-->
  <div class="panel col-lg-6 col-sm-6">
    <div class="panel panel-Success">
      <div class="panel-heading"><strong>Moving Forward</strong>


  <div class="panel-body" style="overflow-y: scroll; height: 125px">

    <ul>Future items to consider
      <p>In the future, there are a handfull of elements that could be added to this application
      to make it more user friendly as well as advance it to a more finished state. Some of these elements include
    additional SQL, advanced HTML, and conditional PHP to make the application more responsive.</p>
    <li>SQL: Understanding some of the advanced SQL features would really make this application useable. It would allow for
      multiple databases to search one another, and be able to query multiple data elements at one time.
    <li>HTML: Learning more HTML code would allow for these SQL queries to be better integrated. Instead of each query statement inline,
    this HTML code could be in a different file. Also, more orginiztion could be maintined by having PHP files such as database connections put into
  different folders.</li>
    <li>PHP: Advanced PHP would allow the user to have more valid information. For example, it would condition the current registered users to
    ensure specific user names have not already been used.</li>
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
  <div class="panel-footer"> Main Page (Capstone Course Project)
  <?php  echo "Today is " . date("d/m/Y") . "<br>";?>
  </div>

</div>
</div>

  </body>
</html>
