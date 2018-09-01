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
<nav>
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Pantry Inventory Solutions</a>
    </div>
    <ul class="nav nav-tabs">
      <li class="active"><a href="Login.php">User Login</a></li>
      <li><a href="CreateUser.php">Create User</a></li>
    </ul>
  </div>
</nav>

<!--Body-->

<!-- Create User Login-->
<div class="container-fluid">
  <div class="row">
    <div class="grid col-lg-7 col-sm-7">
      <div class="panel panel-Warning">
        <div class="panel-heading">
        <p>User Login form</p>

        <form action="LoginUser.php" method="POST">
         <div class="form-group">
           <label>User Name:</label>
           <input type="text" class="form-control" name="UserName">
         </div>
         <div class="form-group">
           <label>Password:</label>
           <input type="password" class="form-control" name="Password">
         </div>
         <button type="submit" class="btn btn-default">Submit</button>
       </form>
        </div>



      </div>

    </div>
    <div class="grid col-lg-5 col-sm-5">
      <div class="panel panel-Warning">
        <div class="panel-heading">
        <p>Current User's Registered</p>
      </div>
      <div class="panel-body" style="overflow-y: scroll; height: 300px">

        <?php
         include 'DatabaseConfigure.php';
         include 'OpenDatabase.php';

         $sql = "SELECT `FirstName`, `LastName`,`UserName`, `Password`
         FROM `users` ORDER By LastName ASC";
              $result = mysqli_query($conn, $sql);

              if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo "First Name: " . $row["FirstName"]. "   " ;
                    echo "Last Name: " . $row["LastName"]. "</br>" ;
                    echo "User UserName: " . $row["UserName"]. "   ";
                    echo "Password: ". $row["Password"]. "</br></br>";
                }
              } else {
                echo "0 users in database.";
              }

              mysqli_close($conn);
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
  <div class="panel-footer"> User Login Page (Capstone Course Project) </div>

</div>
</div>
  </body>
</html>
