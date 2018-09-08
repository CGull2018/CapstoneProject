<?php
//create a new user in database
  session_start();
include 'DatabaseConfigure.php';
include 'OpenDatabase.php';

//Get variables from recipe inputs
$Case = $_POST['Number'];

$Name = $_POST['Name'];
$Ingredient_1 = $_POST['Ingredient_1'];
$Ingredient_1_Quantity = $_POST['Ingredient_1_Quantity'];

$Ingredient_2 = $_POST['Ingredient_2'];
$Ingredient_2_Quantity = $_POST['Ingredient_2_Quantity'];

$Ingredient_3 = $_POST['Ingredient_3'];
$Ingredient_3_Quantity = $_POST['Ingredient_3_Quantity'];

$Ingredient_4 = $_POST['Ingredient_4'];
$Ingredient_4_Quantity = $_POST['Ingredient_4_Quantity'];

echo $Case;

switch ($Case) {
  case "1":
  $sqli = "INSERT INTO recipeingredients (Name, Ingredient_1, Ingredient_1_Quantity)
  VALUES ('$Name','$Ingredient_1','$Ingredient_1_Quantity')";
      break;

    case "2":
    $sqli = "INSERT INTO recipeingredients (Name, Ingredient_1, Ingredient_1_Quantity, Ingredient_2, Ingredient_2_Quantity)
    VALUES ('$Name','$Ingredient_1','$Ingredient_1_Quantity','$Ingredient_2','$Ingredient_2_Quantity')";
          break;

      case "3":
      $sqli = "INSERT INTO recipeingredients (Name, Ingredient_1, Ingredient_1_Quantity, Ingredient_2, Ingredient_2_Quantity,
      Ingredient_3, Ingredient_3_Quantity)
      VALUES ('$Name','$Ingredient_1','$Ingredient_1_Quantity','$Ingredient_2','$Ingredient_2_Quantity'
        ,'$Ingredient_3','$Ingredient_3_Quantity')";
              break;

        case "4":
        $sqli = "INSERT INTO recipeingredients (Name, Ingredient_1, Ingredient_1_Quantity, Ingredient_2, Ingredient_2_Quantity,
        Ingredient_3, Ingredient_3_Quantity, Ingredient_4, Ingredient_4_Quantity)
        VALUES ('$Name','$Ingredient_1','$Ingredient_1_Quantity','$Ingredient_2','$Ingredient_2_Quantity',
          '$Ingredient_3','$Ingredient_3_Quantity','$Ingredient_4','$Ingredient_4_Quantity)";
 break;

  default:
    // code...
    break;
}


$result = mysqli_query($conn, $sqli);
echo "variable added";
header("Location: Recipes.php");

?>
